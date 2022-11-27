<?php

$payment_status = ['Paid', 'Rejected', 'Declined','Gateway Error'];

foreach ($payment_status as $payment_statuses) {
    switch ($payment_statuses) {
        case 'Paid':
            echo '<br>Paytment Successful <br>';
            break;
        case 'Rejected':
            echo '<br>Paytment Rejected <br>';
            break;
        case 'Declined':
            echo '<br>Paytment Declined <br>';
            break;
        case 'Failed':
            echo '<br>Paytment Failed <br>';
            break;

        default:
            echo '<br> Unknown error occured<br>';
            break;
    }
}