<?php

session_start();
if(isset($_SESSION['results'])) {

    //     // //if (isset($_SESSION['results'])) {

    $results = $_SESSION['results'];
    $perform_time = $results['selected_time'];
    $taken = $results['taken_time'];
    $avail = $results['available_time'];


    var_dump($taken);
    var_dump($avail);
    var_dump($perform_time);
}

// // $_SESSION['results'] = null;
require "index-view.php";