<?php

session_start();
if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $band_name = $result['band_name'];
    $perform_time = $results['selected_time'];
    $taken = $results['taken_time'];
    $avail = $results['available_time'];

    $_SESSION['results'] = null;


}


require "index-view.php";