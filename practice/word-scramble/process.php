<?php

session_start();

# Player’s guess
$answer = $_POST['answer'];  # the answer comes from the superglobal array, in this case $POST

# Word they’re trying to guess
$word = $_SESSION['word'];

$haveAnswer = true;

if ($answer == '') {
    $haveAnswer = false;
} elseif ($answer == $word) {  # not hardcoded as pumpkin
    $correct = true;
} else {
    $correct = false;
}

# Store results in the session
$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct,
    'answer' => $answer,
];

# Redirect them back to the index page to see the results and have the option to play again
header('Location: index.php');