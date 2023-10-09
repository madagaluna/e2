<?php
## Game planning
// initalize an array to hold results
$results = [];
for ($i = 1; $i <=10; $i++) {
//+ initalize an array called schedule
$schedule = [];
//+ Create an array of times to play with the times
$times =[1,2,3];
//defining the performer variables
//$performerA_time = 0;
//$performerB_time = 0;
//+ For Performer A, randomly choose a time to perform:
    $performerA_time = $times[array_rand($times)];
//add performer A's time to the schedule    
    $schedule[] = $performerA_time;
// For Performer B, randomly choose a time to perform:
    $performerB_time = $times[array_rand($times)];
// compare performer B's time to performer A's time to see if time is available
        if ($performerB_time != $performerA_time) { 
// updated schedule to include PB if the time is available and announce when both bands will perform  this redundant now that I'm doing the results but I like it.  
        $schedule[] = $performerB_time; }
//           echo "Rock and Roll! The Foos will perform at  " . $performerA_time . " and The Bars will perform at  " . $performerB_time;
// announce that The Bars will not perform - maybe just keep this         
        else {

               $schedule[] = "Wah-Wah is not just a pedal. The Bars will not be a performing today.";
           }

// print the schedule https://www.w3schools.com/php/func_string_implode.asp
  $schedule_String =  implode(" , ", $schedule);
//show results

   $results [] = [
    'the_Foos_time' => $performerA_time,
    'bummer' => $bummer,
    'the_Bars_time' => $performerB_time,
    'the_Schedule_is' => $schedule_String,
   ];    
}
require 'index-view.php';