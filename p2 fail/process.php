<?php

session_start();

if (isset($_POST['perform_time'])) {
    $perform_time = $_POST['perform_time'];
    $schedule = [];
    $performer_A = (isset($_SESSION['performer_A'])) ? $_SESSION ['performer_A'] : rand(1, 3);

    if ($performer_A != $perform_time) {
        $schedule[] = [
            'The Foos' => "The Foos are playing at " . $performer_A . " PM.",
            'The Bars' => "The Bars are playing at " . $perform_time . ".",
        ];
    } else {
        $schedule[] = "The Foos are playing at " . $performer_A . " PM. Please choose another time.";
    }

    $_SESSION['results'] = $schedule;

    header('Location: index.php');
}


$perform_time = $_POST['perform_time'];  //variable named choice to and extract choice data


$times = ["1pm", "2pm", "3pm"]
$foos = $times[array_rand($times)];
$ = $perform_time != $foos; // ternary'd 15 minutes on wk 8 pt 2
//access superglobal, create key -results - and set it to an arry of results of winner, flip and choice
$_SESSION['results'] = [  // the index page extracts this info
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice,
];
// redirect user back to index page - use header, string name of the file to direct back to
header('location: index.php');