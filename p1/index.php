<?php
## Game planning

///+ itialize an array called schedule
$schedule = 0;
//+ Create an array of times to play with the times
$times =[1,2,3];
$performerA_time = 0;
$performerB_time = 0;
//var_dump($times);
//+ For Performer A, randomly chose a time to play:
    $performerA_time = $times[array_rand($times)];
// compare to schedule to see if time is available
    if ($performerA_time != $schedule) {
        // updated schedule if they don't match
        $schedule = $performerA_time;
      //  var_dump($performerA_time);
        echo "Performer A scheduled for time:  " ,$schedule; 
    }
  else {
    echo "Performer A should pick a new time  ";
   }

// are there still time slots available?
if($schedule >= 0) {
    $performerB_time != $times[array_rand($times)];
    // compare to schedule to see if time is available (copy code from $performerA)
        if ($performerB_time != $schedule) {
            // updated schedule if they don't match
            $schedule = $performerB_time;
          //  var_dump($performerA_time);
            echo "Performer B scheduled for time:  " ,$schedule; 
            var_dump($schedule);
        }
      else {
        echo "Performer B should pick a new time  ";
       }
}
// print final schedule
echo "Final Schedule:  ";
echo "Performer A will play at: " . $performerA_time ;
echo "Performer B will play at: " . $performerB_time ;


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



// require 'index-view.php';