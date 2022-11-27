<?php
require 'class/transaction.php';

$transaction = new transaction();

echo transaction::PAY_SUCCESS;

var_dump($transaction->setStatus('Not Done'));

echo transaction::PAY_PENDING;