<?php

session_start();  // the data has to be available when user is redirected back - create the
//var_dump($_POST);

$schedule = [];

if (isset($_POST['perform_time'])) {
    $perform_time = $_POST['perform_time'];
    $performer_A = rand(1, 3);

    $schedule[] = ($performer_A != $perform_time) ?
    $performer_A . "PM \n" . $perform_time :
    "The Foos are playing at " . $performer_A . "PM Please choose another time.";

    $_SESSION['schedule'] = $schedule;


    header('Location: index.php');
}