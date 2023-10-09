<?php
## Game planning
//+ itialize an array called schedule for two elements, a string and an integer (band names and times)
$schedule = ['band'. 'time'];
//+ Create an array of band names with the names
$band = ['The Woo', 'The Wah', 'The Wee', 'The Wink', 'Foo'];
var_dump($band);
//+ Create an array of times to play with the times
$times =[0,4];
var_dump($times);
//+ For performer, randomly choose an element from the band names 
$performer = $band[rand(0,4)];
var_dump($performer);
//+ For performer, randomly choose an element from the time to play array
$ = $times[rand(0,4)];
var_dump($performer);
//+ Compare Performer A's time to the integer element in the schedule array, if they don't match, pop the band name and time to array 
if $performer[$time] != $schedule[1];
$schedule = [$band, $times];
else echo $performer[$time] "is not available.  Choose a new time';

//+else, tell Performer to pick a new time.
//+ if band name key >= 0 
//+ For performer, randomly choose an element from the band names 
//+ else Report band names and time they will play



require 'index-view.php';