<?php

session_start();
if(isset($_SESSION['results'])) {

    //     // //if (isset($_SESSION['results'])) {

    $results = $_SESSION['results'];
    $perform_time = $results['selected_time'];
    $taken = $results['taken_time'];
    $avail = $results['available_time'];

    $_SESSION['result'] = null;

}

// // $_SESSION['results'] = null;
require "index-view.php";