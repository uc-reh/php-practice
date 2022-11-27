<?php

//Functions

function sum(...$numbers){
    return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)) {
    echo $x(1, 2, 3, 4, 56, 6, 6);
}
else {
    echo 'Uncallable';
}

// print_r($sum(1, 2, 3, 4, 56, 6, 6));

$array = [1, 2, 45, 5];

// $array2 = array_map(funcion($newsum)
// {
//     // $newsum*2;
// // },$array);

// print_r($array2);