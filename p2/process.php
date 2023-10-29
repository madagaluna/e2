<?php

session_start();

$perform_time = $_POST['perform_time'];
$taken = ['1pm','2pm','3pm'][rand(0, 2)];
$avail = $perform_time != $taken;
var_dump($_SESSION);

$_SESSION['results'] = [
    'band_name' => $band_name,
    'selected_time' => $perform_time,
    'taken_time' => $taken,
    'available_time' => $avail,

 ];

header('Location: index.php');