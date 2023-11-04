<?php

$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == '') { //left blank
    $haveAnswer = false;
} elseif ($answer == 'pumpkin') {// correct answer//
    $correct = true;
} else {
    $correct = false;
}

require 'process-view.php';