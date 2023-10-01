<?php
#set up cards - use 10 so you have an even number to distribute
$cards = [1,2,3,4,5,6,7,8,9,10];
shuffle($cards);
 echo "SHUFFLED CARDS";
var_dump($cards);  
#initialize empty arrays for playerCards and computerCards
$playerCards =[];
$computerCards = [];



#Your code to distribute the cards in an alternating fashion to pC and cC

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


#verify results
echo "should yield 5 random cards";
var_dump($playerCards); 
 
echo "should yield 5 different random cards";
var_dump($computerCards); 