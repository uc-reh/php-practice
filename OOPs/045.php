<?php

//Object compariosn, variable storage and z value

class A{
   
    public function __construct(int $intger, string $string)
    {
        echo $intger . "<br>" . $string;
    }
}
class B
{

    public function __construct(int $intger, string $string)
    {
        echo $intger. "<br>" . $string;
    }
}

var_dump($i = 10 == $j = 10);
$obj1 = new A(10, 'Abdul');
$obj2 = new B(10, 'Abdul');

echo '<br> Checking with == operator :<br>';
var_dump($obj1 == $obj2);

echo '<br> Checking with === operator :<br>';
var_dump($obj1 === $obj2);