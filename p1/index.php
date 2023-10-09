<?php
## Game planning
//+ itialize an array called schedule for two elements, a string and an integer (band names and times)
$schedule = 0;
//+ Create an array of times to play with the times
$times =[1,2,3,4,5];
//var_dump($times);
//+ shuffle / randomly assign the times to play
shuffle($times);
foreach ($times as $time) {
    $schedule = $time;
}
//+ Let perfomrer know where they are scheduled
 echo "Performer is scheduled for: ", $schedule,

//if ($performance != $schedule){
  //  $schedule = $performance;
//}
 
//else {
//     echo "That time is taken. Pick a new time";
//}
//if ($performance >= 0) {
  //  $performance = $times[array_rand($times)];
//} 
//else {
  //   echo "Schedule: " . $schedule;
//}
//if they don't match, pop the band name and time to array 


  //  $schedule = [$band, $times];
    //elseif ($performer[$time]) = $schedule[1]; echo //$performer[$time] "is not available.  Choose a new time';

//+else, tell Performer to pick a new time.
//+ if band name key >= 0 
//+ For performer, randomly choose an element from the band names 
//+ else Report band names and time they will play



require 'index-view.php';