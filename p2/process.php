<?php

session_start();  // the data has to be available when user is redirected back - create the
var_dump($_POST);

if (isset($_POST['perform_time'])) {
    $perform_time = $_POST['perform_time'];
    $schedule = [];
    $performer_A = (isset($_SESSION['performer_A'])) ? $_SESSION ['performer_A'] : rand(1, 3);

    if ($performer_A != $perform_time) {
        $schedule[] = $performer_A;
        $schedule[] = $perform_time;
    } else {
        "The Foos are playing at " . $performer_A . "PM Please choose another time.";
    }

    $_SESSION['results'] =  [
        'schedule' => $schedule,
        'The Foos' => $performer_A,
        'The Bars' => $perform_time,

    ];
    header('Location: index.php');
}