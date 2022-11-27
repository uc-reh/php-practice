<?php
//Functions in php

function helloFun(){
    echo '<br>Hello World<br>';
    return 1;
}
helloFun();

echo helloFun(); // This will return the value

echo '<br>';
function checkInt() : float  {
    return '1.5';
}

var_dump(checkInt());