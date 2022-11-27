<?php

class transaction{
    public const PAY_SUCCESS = 'Paid';
    public const PAY_FAILED = 'Failed';
    public const PAY_PENDING = 'Pending';
    public const PAY_STATUS = 'NOTHING';

    private $status = 'Done';
    public function __construct(){
        echo self::PAY_FAILED;
    }
    public function setStatus(string $status) : self {
        $this->status = $status;
        return $this;
    }
}