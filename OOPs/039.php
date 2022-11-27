<?php

abstract class Greetings
{
    abstract public function greet();
}

class EnglishGreet extends Greetings
{
    public function greet() :void {
        echo '<br>Hello<br>';
    }
}
class HindiGreet extends Greetings
{
    public function greet() :void
    {
        echo '<br>Namaste<br>';
    }
}
class UrduGreet extends Greetings
{
    public function greet() : void
    {
        echo '<br>Salam<br>';
    }
}
$hindi = new HindiGreet();
($hindi->greet());
$urdu = new UrduGreet();
($urdu->greet());
$english = new EnglishGreet();
($english->greet());
