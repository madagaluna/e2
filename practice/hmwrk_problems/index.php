<?php
## Game planning
// initalize an array to hold results 
## adding fx
function availabletimes($performerA_time, $performerB_time) {
    return $performerA_time != $performerA_time;
$results = [];
}
for ($i = 1; $i <=10; $i++) {
// initalize an array called schedule
$schedule = [];
// Create an array of available performance times
$times =[1,2,3];

// For Performer A, randomly choose a time to perform:
    $performerA_time = $times[array_rand($times)];
//add performer A's time to the schedule    
    $schedule[] = $performerA_time;
// For Performer B, randomly choose a time to perform:
    $performerB_time = $times[array_rand($times)];
// compare performer B's time to performer A's time to see if time is available
        if (availabletimes($performerB_time, $performerA_time)) { 
// if the time is available, update schedule to include PB  
        $schedule[] = $performerB_time; }
// else update schedule that The Bars will not be performing        
        else {

               $schedule[] = "that's it: Wah-Wah is not just a pedal. The Bars will not be a performing today.";
           }

// concatenate the schedule and make it a string https://www.w3schools.com/php/func_string_implode.asp
  $schedule_String =  implode(" and ", $schedule);
//show results

   $results [] = [
    'the_Foos_time' => $performerA_time,
    'the_Bars_time' => $performerB_time,
    'the_Schedule_is' => $schedule_String,
   ];    
}
require 'index-view.php';