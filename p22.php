<?php

//Variables and it's scope

$x = 66;

function getVal(){
    global $x;
    return $x; //undefined until not global
}

echo getVal();

//Stratic Vars .... 

function getValue(){
    $value = null;

    if($value == null)
    {
        $value = getVal2();
    }
    return $value;
}

function getVal2(){

    sleep(2);
    return 10;
}

echo getValue();