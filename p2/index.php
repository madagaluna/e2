<?php

session_start();

$results = isset($_SESSION['results']) ? $_SESSION['results'] : null;


require "index-view.php";

//$_SESSION['perform_time'] = [ // the index page extracts this info
// 'Schedule' => $schedule,
// 'Foos' => $performer_A,
// 'Bars' => $perform_time,
//];