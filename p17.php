<?php

//Swithch vs Match

$payment_status = 'Paid';

$get_status = match ($payment_status) {
    'Paid' =>'Payment Successful',
    'Decline' => 'Payment Decline',
    'Failed' => 'Payemtn Failed',
    'Rejected' => 'Payment Rejected',
    default => 'Unkonwn error',
};
