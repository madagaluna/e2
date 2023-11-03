<?php



require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

#and easier way than HES\object is
## use HES\Number;
# use HES\EvenNumber;
# use HES\Debug as DebugH;   and can create an alias when you have two methods with the same name from different sources
# use fred\Debug as DebugF (and specify in code which one you use, not shown on this page but debug below would be DebugH or F);


$example1 = new HES\Number(9);  # instantiate the object by creating a new instance of Number and set it to the variable $example (then from the object $example, invoke a method, such as the var_dump below)
$example2 = new HES\EvenNumber(9);

var_dump($example1->getHalf());
var_dump($example2->getHalf());

var_dump($example1->isValid()); # these two are differnt because the child (EvenNumber.php) invokes a different validation
var_dump($example2->isValid());

HES\debug::dump('Hello World'); # because this is a static method, you don't need to create an object - just reference the class name go straight to invoking the method

var_dump(['string','and',['array', 'see']]);

HES\debug::dump(['string','and',['array', 'see']]);