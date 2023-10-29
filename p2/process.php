<?php

$perform_time = $_POST['perform_time'];

$taken = ['1pm','2pm','3pm'][rand(0, 2)];
$avail = $perform_time != $taken;

var_dump($perform_time);
var_dump($taken);
var_dump($avail);


// function taken_time()
// {
//     $times = ['1pm','2pm','3pm'];
//     return $times)];
// }
// if($perform_time != $taken) {
//     $avail = true;
// } else {
//     $avail = false;
// }

// // For Performer A, randomly choose a time to perform:
// $performerA_time = $times[array_rand($times)];
// //add performer A's time to the schedule
// $schedule[] = $performerA_time;
// // For Performer B, randomly choose a time to perform was $performerB_time = $times[array_rand($times)];:

// $perform_time = $_POST['perform_time'];

// // compare performer B's time to performer A's time to see if time is available
// if ($perform_time != $performerA_time) {
//     // if the time is available, update schedule to include PB
//     $schedule[] = $perform_time ;