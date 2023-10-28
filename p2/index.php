<?php

session_start();

if(isset($_SESSION['results'])) {
    // accesing the session results 3 times so turn the sessionresults into a variable $results instead of a $SESSION['results']
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $flip = $results['flip'];
    $choice = $results['choice'];
    //  var_dump($winner);
    //   var_dump($flip);
    //  var_dump($choice);

    $_SESSION['results'] = null; // to clear results - works by isset evaluating to false.
}



require "index-view.php";
