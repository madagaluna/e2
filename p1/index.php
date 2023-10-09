<?php
## Game planning

///+ itialize an array called schedule
$schedule = 0;
//+ Create an array of times to play with the times
$times =[1,2,3];
$performerA_time = 0;
$performerB_time = 0;
//var_dump($times);
//+ For Performer A, randomly choose a time to play:
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

// Performer B is given a random time to perform:
    $performerB_time = $times[array_rand($times)];
    echo "performer B is scheduled for ";
    var_dump($performerB_time);
    // compare to performer A's time to see if time is available
        if ($performerB_time != $performerA_time) { 
            echo "Rock and Roll! Performer A plays at  " . $performerA_time . " and Performer B plays at  " . $performerB_time ;
        } else {
                echo "Wah-Wah is not just a pedal. performance today Performer B.";
            }

// require 'index-view.php';