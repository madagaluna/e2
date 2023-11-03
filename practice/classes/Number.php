<?php

namespace HES;

class Number
{
    public $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function getHalf()
    {
        return $this->num / 2;
    }

    public function isValid()
    {
        $this->test();  #invokes the function below just referring to this instance of the class
        return is_numeric($this->num);  # an $this-> % 2 == 0; mod fx divisible by 2 and gives remainder, if it's =0. it's an even number
        # $this->test();
        # return is_numeric($this->num);
    }


    protected function test()  #accessible in class and child classe
    {
        var_dump('Testing...');
    }
}

#outside classes - you don't want to edit directly, you want to adapt them and that's where inheritances come in - gives option to make tweaks. Check out EvenNumber.php
