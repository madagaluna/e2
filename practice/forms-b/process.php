<?php

session_start();

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

var_dump($_SESSION);

header('Location: done.php');