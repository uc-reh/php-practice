<?php

//function and parameters passing


function sum($x, $y=10){

    return $x + $y;
}

echo sum(4);
// $values = 0;
$sum = 0;
function multiSum(...$numbers) : int
{
    // foreach($numbers as $values)
    // {
    //     $sum += $values;
    //     // return $numbers;
    // }
    return array_sum($numbers);
}

 echo multiSum(4, 5, 6, 7);