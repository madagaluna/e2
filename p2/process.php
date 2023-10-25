<?php

//form c to handle the form submissions
// page with form, submit to form send back to page with results.
// view submits to process.php, this checks the game and redirects back to the index page

// set up subdomains

/*session_start();

$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == '') {
    $haveAnswer = false;
} elseif ($answer == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

header('Location: index.php');*/