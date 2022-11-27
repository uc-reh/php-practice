<?php

// require 'class/first.php';
// require 'class/second.php';

function __autoload($class){
    require "class/" . $class . ".php";
}

$first = new first();
$second = new second();