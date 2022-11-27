<?php

class MyClass
{
    public static $var_new = '0';

    public function __construct(){
       //echo self::$var_new++;
    }
    public static function createInstance()
    {
        echo self::$var_new++;
    }
}

$obj = new MyClass();
$obj = new MyClass();
echo '<br>';
echo MyClass::$var_new;

echo $obj->createInstance();

