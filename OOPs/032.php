<?php

class Transaction{

    public $amount;
    public $desc;

    public function __construct(float $amount, string $desc){
        $this->amount;
        $this->desc;
    }

    public function getDisc($disc){
        $this->amount = $this->amount + $disc;
        return $this;
    }
    public function getTotal(){

        return $this->amount;
    }
}

$new_obj = new Transaction(100, 't1');

$new_obj->getDisc(20);

var_dump($new_obj->getTotal());

