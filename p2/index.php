<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $schedule = $results['schedule'];
    $foos = $results['performer_A'];
    $bars = $results($perform_time)
}

$_SESSION['results'] = null;
require "index-view.php";