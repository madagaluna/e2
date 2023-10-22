<?php
# Form B would be better for something like the shopping cart
# Using form C - the form submits to process page, then sends back to initial page with update
session_start();

# Array of words and hints to choose from
$words = [
    'evidence' => 'A discovery that helps solve a crime',
    'ponder' => 'To think carefully about something',
    'locate' => 'Discover the exact place or position of something or someone',
    'abridge' => 'to shorten by leaving out some parts',
    'regulate' => 'to make rules or laws that control something',
    'modest' => 'not overly proud or confident',
    'impromptu' => 'not prepared ahead of time',
    'stint' => 'a period of time spent at a particular activity',
    'tranquil' => 'free from disturbance or turmoil',
    'mutiny' => 'a turning of a group against a person in charge'
];

# Default values - assumes “fresh game” first time or if you refresh or come back later - use a new word - therefore $useNewWord is initialized as true 
# the $lastWord  is initialized too and used to extract and store word in session -
# the else condition overrides this and allows you to reuse the word if you got it wrong the first time.
$useNewWord = true;  # use a new word - line 44 and 45 set to TRUE and line 48 sets to FALSE
$lastWord = '';  # line 32, extract the word out of the session ALSO store the word in the session LINE 52 so it can be sent to the process and checked on line 15 in process and when they get it incorrect (LINE 23)

# If we’ve just played the game, we’ll have results to show
if (isset($_SESSION['results'])) {

    # Extract data from the session
    $results = $_SESSION['results']; # get resurlts
    $haveAnswer = $results['haveAnswer']; # if it's not empty
    $correct = $results['correct']; #if it's correct
    $lastWord = $_SESSION['word']; #store the word

    # If they got it correct we will pick a new word
    $useNewWord = $correct; #set the new word to whatever correct is - this is BOOLEAN - true or false -  if they get it correct, $useNewWord will be true which prompts the SET THE WORD code to pick new word, otherwise go to ELSE and set the word to whatever the word is. This is also the same as 'if ($correct) { $useNewWord = true;} else {    $useNewWord = $correct; #set the new word to whatever correct is - this is BOOLEAN - true or false -  if they get it correct, $useNewWord will be true which prompts the SET THE WORD code to pick new word, otherwise got to ELSE and set the word to whatever the word is. This is also the same as 'if ($corretc) { $useNewWord = true;} else {$useNewWord = false;}


    # Clear the results so if they refresh or come back they’re not seeing old results
    $_SESSION['results'] = null;
}

# Set the word
if ($useNewWord) { # This is also the same as 'if ($correct) { $useNewWord = true;}
    # Prevent using the same word that was used last time:
    while (!isset($word) or $word == $lastWord) {  # this means "while the word is not yet set" !isset($word) - without it you have an error because the word doesn't exist yet.  It is common to do this when you want to pick a value that doesn't equal an existing value.
        $word = array_rand($words);
    }
} else {  #not picking a new word - got it incorrect -keep the same wod and on line 53, set it in the session
    $word = $lastWord;
}

# Update/set the word in the session so we can check their answer in process.php
$_SESSION['word'] = $word;

# Extract a hint and scramble the word for displaying in the view
$hint = $words[$word];  # reference word array, use the word itself as the index position for the hint
$wordScrambled = str_shuffle($word); # this is why it continues to shuffle - it could be elsewhere

# Load the view
require 'index-view.php';