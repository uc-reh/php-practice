<?php
//Loops

$x = 15;
$i = 0;
while($i<15)
{
    echo '<br>Hello While Loop<br>';
    $i++;
}
$j = 1;
do
{
    
    echo 'Do While<br>';
    $j++;

} while ($j < 15);


for($x=0; $x<=20; $x++){
    echo '<br> Printed in for loop<br>';
    if($x==5){
        continue;
    }
    if($x==6)
    {
        break;
    }
}

$new_array = ['Lang 1'=>'PHP', 'Lang 2' =>'Javascript', 'Lang 3' =>'Python', 'Lang 4' =>'C#'];

// $new_size = sizeof($new_array);
// $z = 0;
// for($z=0; $z<=$new_size; $z++)
// {
//     echo print_r($new_array);
// }

foreach($new_array as $key => $array){
    echo $key . ':' . $array;
}
echo '<br>';
echo implode($new_array);

if(is_array($new_array)){
    echo 'Hello Array';
}