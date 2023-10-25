<?php


class Person  //copied from my hmwrk file
{
    # Properties
    public $firstName;  //properties of the class
    public $lastName;
    public $age;

    # Methods
    public function __construct(string $firstName, string $lastName, int $age)  // parameters
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function getFullName()  // empty () cuz we don't have anything yet
    {
        return $this -> firstName . ' ' . $this->lastName;
    }
    public function getClassification()
    {
        return ($this-> age > 18) ? 'adult' : 'minor'; //woot, got it!
    }
}