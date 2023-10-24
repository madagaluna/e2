<?php
## Game planning
function availabletimes($performerA_time, $performerB_time) {
    return $performerA_time != $performerB_time;
$results = [];}
    for ($i = 1; $i <=10; $i++) {
$schedule = [];
$times =[1,2,3];
    $performerA_time = $times[array_rand($times)];  
    $schedule[] = $performerA_time;
    $performerB_time = $times[array_rand($times)];
  #      if (availabletimes($performerB_time, $performerA_time)) { # apply ternary here!
   #     $schedule[] = $performerB_time; }     
  ##             $schedule[] = "that's it: Wah-Wah is not just a pedal. The Bars will not be a performing today.";
   #        }

    $schedule[] = 
        $availabletimes($performerA_time, $performerB_time) ? $performerB_time : "that's all for today: Wah-Wah is not just a pedal. The Bars will not be a performing today.";
   
  $schedule_String =  implode(" and ", $schedule);
   $results [] = [
    'the_Foos_time' => $performerA_time,
    'the_Bars_time' => $performerB_time,
    'the_Schedule_is' => $schedule_String,
   ]; 
}
require 'index-view.php';