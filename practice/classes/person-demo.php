<?php

require 'Person.php';  // pulls in class
//new invokes new instance of the class
$person = new Person('John', 'Harvard', 45);  // creates a $person object, passes in 3 parameters from constructer,
echo $person->firstName; # Should print "John"  access the first name property DONT USE PARATHESIS AFTERWARD BECAUSE ITS JUST A PROPERTY , NOT A METHOD
echo $person->getFullName(); # Should print "John Harvard" USE PARATHESIS BECAUSE IT IS A METHOD
echo $person->getClassification(); # Should print "adult"

//class/person-demo.php