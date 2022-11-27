<?php
//Operators

$x = 5;
$y = 10.5;

$z = $x % $y;

var_dump($z);

// $div = fdiv 5/0 ;

// echo '<br>' . $div;

$x **= 2;
var_dump($x);

//comparison operator

if($x == '25')
{
    echo '<br>true<br>';
}

if ($x ===! '25') {
    echo '<br>true<br>';
}
else {
    echo 'false<br>';
}

$return = $x == 25 ?  "Hello" : "Bye";

echo $return;