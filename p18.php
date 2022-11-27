<?php
//use of return

declare(strict_types=1);
function sum (int $x, int $y)
{
    return ($x + $y); //This will not stop execting script
}

$z = sum(10, 11);
echo $z;

// return; //This will stop execution here

echo '<br> See we still running script<br>';

//Ticks

function onTick(){
    echo 'Tick Is here<br>';
}

register_tick_function('onTick');

declare(ticks= 2);

$i = 0;
$len = 10;

while($i<$len){
    echo $i++.'<br>';
}

