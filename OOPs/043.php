<?php

trait greeting{
    private function greet()
    {
        echo 'Good Morning';
    }
}

class one{
    use greeting;
    
}

//priorities
class two extends one{
    public function greet()
    {
        echo 'Good Afternoon';
    }

}

$obj = new two();

$obj->greet();