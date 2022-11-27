<?php

class Abdul{
    public static string $name = 'Abdul';

    public function show(){
        echo self::$name;
        echo static::$name;
    }
}

class Rehman extends Abdul
{
    public static string $name = 'Rehman';
}

$obj = new Rehman();

echo $obj->show();