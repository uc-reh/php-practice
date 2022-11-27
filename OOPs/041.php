<?php

class myClass{
  private $data = ['name'=>'Abdul','class'=>'SEMV','Roll'=>02];
    private $greet;

    // public function showGreet(){
    //     echo $greet;
    // }

//   public function __get($key)
//   {
//     if(array_key_exists($key,$this->data))
//     {
//             return $this->data[$key];
//     }
//     else{
//             echo 'Failed';
//     }
//   }
  public function __set($prop,$value)
  {
    if(property_exists($this,$prop)){
            $this->prop = $value;
    }
    else{
            echo 'operation failed';
    }
  }

}

$obj = new myClass();

// echo $obj->Roll;

$obj->greet = "Hello World";

// $obj->showGreet();