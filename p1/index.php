<?php
## Game planning

///+ itialize an array called schedule
$schedule = 0;
//+ Create an array of times to play with the times
$times =[1,2,3,4,5];
//var_dump($times);
//+ For Performer A, randomly chose a time to play:
    $performerA_time = $times[array_rand($times)];
// compare to schedule to see if time is available
    if ($performerA_time != $schedule) {
        // updated schedule if they don't match
        $schedule = $performerA_time;
        var_dump($performerA_time);
    }

// foreach ($times as $time) {
 //  if ($schedule = $time) {
 //   $schedule = $time;
//   };

//+ Let perfomrer know where they are scheduled
 //echo "Performer is scheduled for: ", $schedule;
 //} // final schedule
 //echo "final schedule: ", $times;
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