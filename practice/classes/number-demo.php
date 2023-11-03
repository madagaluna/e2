<?php

require 'Number.php';
require 'EvenNumber.php';

$example1 = new Number(9);
$example2 = new EvenNumber(9);

var_dump($example1->getHalf());
var_dump($example2->getHalf());

var_dump($example1->isValid()); # these two are differnt because the child (EvenNumber.php) invokes a different validation
var_dump($example2->isValid());