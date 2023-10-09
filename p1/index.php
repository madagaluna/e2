<?php
## Game planning

///+ itialize an array called schedule
$schedule = [];
//+ Create an array of times to play with the times
$times =[1,2,3];
$performerA_time = 0;
$performerB_time = 0;
//var_dump($times);
//+ For Performer A, randomly choose a time to play:
    $performerA_time = $times[array_rand($times)];
//add performer A's to the schedule    
    $schedule[] = $performerA_time;

// Performer B is given a random time to perform:
    $performerB_time = $times[array_rand($times)];
// compare to performer A's time to see if time is available
        if ($performerB_time != $performerA_time) { 
// updated schedule to include PB if they don't match        
        $schedule[] = $performerB_time;
            echo "Rock and Roll! The Foos will play at  " . $performerA_time . " and The Bars will play at  " . $performerB_time ;
        } else {
                echo "Wah-Wah is not just a pedal. The Bars will not be a performing today.";
            }
// print the schedule https://www.w3schools.com/php/func_string_implode.asp
echo "  There will be music at:  ". implode(" , ", $schedule);
        
// require 'index-view.php'