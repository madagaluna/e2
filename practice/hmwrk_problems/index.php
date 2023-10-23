<?php
## Game planning
// initalize an array to hold results 
## adding fx
function availabletimes($performerA_time, $performerB_time) {
    return $performerA_time != $performerB_time;

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

/*Write a function that will produce a count of how many vowels are in a given word.
The function should be called vowelCount
It should accept 1 parameter, $word
It should return an integer value (the vowel count) */


function checkNumber($guess, $mysteryNumber)
{
    if ($guess == $mysteryNumber) {
        return 'correct';
    } elseif ($guess > $mysteryNumber) {
        return 'high';
    } else {
        return 'low';
    }
}

// var_dump(checkNumber(3, 6)); # low
// var_dump(checkNumber(7, 3)); # high
var_dump(checkNumber(3, 3)); # correct



foreach($cards as $key => $number) {
    if ($key % 2 == 0);
   // echo 'used https://www.geeksforgeeks.org/php-check-number-even-odd/' - then saw it in e2 notes!;
       $playerCards[] = array_shift($cards); 
       if ($key % 2 != 0);
       $computerCards [] = array_shift($cards);
    if($key >= 4) {
       break;
   } 
}



require 'index-view.php';