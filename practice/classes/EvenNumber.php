<?php

class EvenNumber extends Number  #extends the Number class - inherit everything available to Number class, including changes we made to Numbers class
    #EvenNumber is the child class of Parent Number.  Sub and super class, too.
    #customize: add the check for even number but add the "and $this->num % 2 == 0;" which overrides the Parent Number class
{
    public function isValid()
    {
       # return is_numeric($this->num);  what parent is doing so it is written return parent::isValid     invoking parent 
        return parent::isValid() and $this->num % 2 == 0;  #customizing the isValid method overriding the method in Number.phph this-> is used within the class its own properties and methods - an instance of its class where
    }

   # public function xyz() {   doesn't override the parent cuz it has no relation to it.  It's independent within the parent class - can inherit everything then add on e.g. an admin user


    }
}