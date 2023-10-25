<?php

## Game planning
// initalize an array to hold results
## adding fx
function availabletimes($performerA_time, $performerB_time)
{
    return $performerA_time != $performerB_time;

    $results = [];
}

for ($i = 1; $i <= 10; $i++) {
    // initalize an array called schedule
    $schedule = [];
    // Create an array of available performance times
    $times = [1,2,3];

    // For Performer A, randomly choose a time to perform:
    $performerA_time = $times[array_rand($times)];
    //add performer A's time to the schedule
    $schedule[] = $performerA_time;
    // For Performer B, randomly choose a time to perform:
    $performerB_time = $times[array_rand($times)];
    // compare performer B's time to performer A's time to see if time is available
    if (availabletimes($performerB_time, $performerA_time)) {
        // if the time is available, update schedule to include PB
        $schedule[] = $performerB_time;
    }
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

#get a wprd
function vowelCount($word)
{
    $Count = 0;

    #you can loop through that array
    foreach (str_split($word) as $character) {
        # look at each character in the string
        if(in_array($character, ['a', 'e', 'i', 'o', 'u'])){  /*if character is in array */ 
        //  increment some counter whenever one of the characters is a vowel.
        $Count++;
    }
    return $Count; /*return after */ 
}

/* explanation of vowelCount: str_split takes string and conversts to string, 

/*Create a class called Person.

This class should have 3 public properties:

A string firstName
A string lastName
An int age
Constructor

The constructor of this class should accept 3 parameters: firstName, lastName, age. It should use these parameters to set the corresponding class properties, e.g.:

$this->firstName = $firstName;*/



class Person
{
    # Properties
    public $person;
    public $firstName;
    public $age;

    # Methods
    public function __construct($firstName, $lastname, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function getFullName()
    {
        return $this -> firstName . "" . $this->lastName;
    }

    public function getClassification()
    {
        return ($this-> age > 18) ? 'adult' : 'minor';
    }
}


/*   The class should have a public method called getFullName that accepts 0
parameters and returns a string of text that concatenates the firstName and
lastName properties with a space in between.
This class should have another public method called getClassification that
returns a string of "adult" if the person's age is >= 18 or "minor" if the person's age
is < 18.*/


# this is a file for a class instead of defining it within the folder
# name of file is the same as name of class
# there shouldn't be anythig other than the code for class in the file except some debugging

#jasn JAVASCRIPT OBJECT NOTATON - parsable text
# the object is denoted by the start and end of the curly bracket

# "1" "2" are KEYS pointingto values with a COLON : and inside that are more KEY:VALUE  pairs  - see products.json