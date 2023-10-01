<?php

echo "HELLO week4.php~"; 

# track moves of rock paper scissors
# an array to hold moves
# moves variable and set it to an array:
$moves = ['rock', 'paper', 'scissors']; #array of string (quotes), two datatypes: 

$strawLengths = [2,2,2,2,2,1]; # numerical values or both
$mixed = ['rock', 1, .04, true];

#how to extract data from an array
# positions within arrarys begins at 0.  Rock is 0, paper is 1, scissors is 2
#extract
echo $moves[0];
echo $moves[1];
echo $moves[2];
echo "           ";

#if you go beyond the scope you get an undefined offset warning.
echo "THERE IS NOT A 6 in the array so you get bad variable warning ~";
echo $moves[6];

#debugging: dump a variable to the page -output content of array, esp undefined arrays:
echo "var_dump:~ ";
var_dump($moves); 

echo " HOW TO build game logic:~";
echo "EXPECTS MIN and max_numbers~";
echo "THE MIN and max numbers correspond to the position of the data in the array.e.g. 0 EQUALS ROCK!!! ~If there are no min or max numbers you get an error with a large number ";
echo "REFRESH PAGE and int(x) will change    ";
$randomNumber = rand(0,2);
var_dump($randomNumber);
echo "~ so to use teh random fx write (see php)";
$move = $moves[$randomNumber];
echo "~ use var_d to see the output - note move and moves are different ~";
var_dump($move);
echo "~takeaway: use var_d to make sure you are getting values you expect";
echo " different kind of arrays: Associative array - define own keys";

$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$hquarter_value = .50;

# create a key, 1st is pnny, add points to operator to assign

$coin_values = [
    'penny'=> .01,
    'nickel'=> .05, 
    'dime' => .10,
    'quarter' =>.25
];

#to extact values:
var_dump($coin_values['quarter']);

# underscore of twp words is snake_case one word - rndnmber - is something else - you want to be consistent

$coin_counts = [
    'penny'=> 100,
    'nickel'=> 25,
    'dime'=> 100,
    'quarter'=> 34,
   
];

echo "REASONS FOR AN ARRAY versus individual values for scalar variables include
organization - related values, group them in an array
programs that do array sorting, e.g asort  asort sorted based on values, alphabetically sorting an array based on it's values smallest value to largets ";

asort($coin_counts);
var_dump($coin_counts);
echo "arsort reverse sorts the array";
asort($coin_counts);
var_dump($coin_counts);

echo "SORTING ON THE KEYS: (alphabetically on the key. e.g. dimes, nickles, etc.) ksort";

ksort($coin_counts);
var_dump($coin_counts);

krsort($coin_counts);
var_dump($coin_counts);



echo "FOREACH @ 37 minutes in video coin is the key -commented out answer";
/* $total = 0;
foreach ($coin_counts as $coin => $count)
{
    $total = $total +($count * $coin_values[$coin]);

}


var_dump($total); */

echo "A more efficient way to write this is in a multidimensional array. Both arrays have the same set of keys.  DRY do not repeat
new variable - an array within an array, initialized as info";
/* $coins = [
    'pen'=> [100, .01],
    'nic'=> [25, .05],
    'dim'=> [100, .10],
    'quart'=> [34, .25],
    'new coin tacked on' => [100, .5]
];

foreach($coins as $key => $info) {
    $total = $total + ($info[0] * $info[1]);
}
var_dump($total); */

echo "now to make the info an associative array @ 45 minutes in video what was: 
";

$coins = [
    'pen'=> [
        'count' =>100, 
        'value' =>.01
    ],
    'nic'=> [
        'count' => 25, 
        'value' =>.05
    ],
    'dim'=> [
        'count' =>100, 
        'value' =>.10
    ],
    'quart'=> [
        'count' =>34,
        'value' => .25
    ],
    'new coin tacked on' => [
        'count' => 1000,
        'value' => .5
        ]
];
$total = 0;
foreach($coins as $key => $info) {
    $total = $total + ($info['count'] * $info['value']);
}
var_dump($total);

echo "GAMES";

$cards= [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

shuffle($cards);

var_dump($cards);

echo "SPLIT the deck  below says splice the deck, use array, start at position zero, go to the 5th card";

/* 
echo "the leftover cards are the computer's cards";
$computerCards = $cards;
var_dump($playerCards); */
// to draw a card
$playerCards = array_splice($cards, 0, count($cards)/2);
echo "VERIFY";
var_dump($playerCards);

$playerDraw = $playerCards [4];
echo "VERIFY";
var_dump($playerCards);
var_dump($playerDraw);

echo "use -1 because the first position is 0";
$playerDraw = $playerCards [count($playerCards) - 1]; 
echo "VERIFY";
var_dump($playerCards);
var_dump($playerDraw);

echo "TO MAKE splicing the cards more dynamic, use count";

Echo "POP is another way to draw cards that removes them from the playerCards array";

var_dump($playerCards);
echo "now POP";
$playerDraw = array_pop($playerCards);
var_dump($playerCards);
var_dump($playerDraw);