<?php

$x = 20.9;

var_dump($x);

$max = PHP_FLOAT_MAX *2;

var_dump($max);

$new_var = floor(20.9);


var_dump($new_var);
$new_var_t = ceil(20.9);
var_dump($new_var_t);

$n_a = 2 - 1.7; //0.3
$n_b = 3 - 2.7; //0.3

if($n_a == $n_b)
{
    echo "True";
}
else {
    echo "False"; //False
}

$type_cast = (float) 99;

var_dump($type_cast);

$type_cast2 = floatval(99);

var_dump($type_cast2);
