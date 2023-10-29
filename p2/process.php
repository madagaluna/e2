<?php

session_start();

$perform_time = $_POST['perform_time'];

$taken = ['1pm','2pm','3pm'][rand(0, 2)];
$avail = $perform_time != $taken;


$_SESSION['results'] = [
    'selected_time' => $perform_time,
    'taken_time' => $taken,
    'available_time' => $avail,
];
var_dump($avail);

header('Location: index.php');