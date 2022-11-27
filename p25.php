<?php

$array_dec = ['elem1'=>1, 'elem2' => 6, 'elem3' => 4, 'elem4' =>2, 'elem5' => 8, 'elem6' =>9];
$array_nov = ['php', 'have', 'Multiple', 'Array', 'Functions'];

function prettyPrintArray($array){

    echo '<br>';
    print_r($array);
    echo '<br>';
}

prettyPrintArray(array_chunk($array_dec,8));

// prettyPrintArray(array_combine($array_dec, $array_nov));

prettyPrintArray(array_filter($array_dec,fn($numbers)=>$numbers%2==00));

echo 'Orignal array is : <br>';

prettyPrintArray($array_dec);

prettyPrintArray(array_map(fn($numbers)=>$numbers*$numbers,$array_dec));

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

prettyPrintArray(array_reduce($array_dec,'sum'));

prettyPrintArray(array_search('2', $array_dec));

prettyPrintArray(ksort($array_dec,SORT_NUMERIC));