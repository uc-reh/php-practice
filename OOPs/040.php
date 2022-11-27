<?php
//Interfaces

interface EnglishGreet
{
    function greeten();
}

interface HindiGreet
{
    function greethi();
}
interface UrduGreet
{
    function greetur();
}

class Greet implements EnglishGreet,HindiGreet,UrduGreet
{
    public function greeten()
    {
        echo 'Hello<br>';
    }
     public function greethi()
    {
        echo 'Namaste<br>';
    }
     public function greetur()
    {
        echo 'Salam<br>';
    }
}

$obj = new Greet();

$obj->greeten();
$obj->greethi();
$obj->greetur();