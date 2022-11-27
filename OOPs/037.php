<?php

class transaction{

    private $amount;

    public function setAmount(float $amount): float
    {

        $this->amount = $amount;
        return $this->amount;
    }
    public function getAmount() : float
    {
        self::sendMail();
        echo $this->amount;
        return $this->amount;
    }
    private function sendMail()
    {
        echo '<br>Mail sent successfully<br>';
    }
}

$transaction = new Transaction();

$transaction->setAmount(20);
$transaction->getAmount();
