<?php

$x = 55;

var_dump($x); //int

$new = PHP_INT_MAX;

var_dump($new); //int
$new_var = PHP_INT_MAX+1;

var_dump(is_int($new_var)); //float

$type_cast = (int) 20.9;

var_dump($type_cast);

