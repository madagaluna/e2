<?php
## Game planning
// iniatiaze an array to hold results
$results = [];
for ($i = 1; $i <=10; $i++) {
//+ itialize an array called schedule
$schedule = [];
//+ Create an array of times to play with the times
$times =[1,2,3];
//defining the performer variables
$performerA_time = 0;
$performerB_time = 0;
//+ For Performer A, randomly choose a time to perform:
    $performerA_time = $times[array_rand($times)];
//add performer A's time to the schedule    
    $schedule[] = $performerA_time;
// For Performer B, randomly choose a time to perform:
    $performerB_time = $times[array_rand($times)];
// compare performer B's time to performer A's time to see if time is available
        if ($performerB_time != $performerA_time) { 
// updated schedule to include PB if the time is available and announce when both bands will perform  
   
        $schedule[] = $performerB_time;
            echo "Rock and Roll! The Foos will play at  " . $performerA_time . " and The Bars will play at  " . $performerB_time ;
// announce that the second band will not perform          
        } else {
                echo "Wah-Wah is not just a pedal. The Bars will not be a performing today.";
            }

// print the schedule https://www.w3schools.com/php/func_string_implode.asp
echo "  There will be music at:  ". implode(" , ", $schedule);
//$results[
 //   'The Foos' => $performerA_time,
// ]
   $results [] = [
    'The Foos time' => $performerA_time,
    'The Bars time' => $performerB_time,
    'The Schedule is' => $schedule
   ];    
}
require 'index-view.php';