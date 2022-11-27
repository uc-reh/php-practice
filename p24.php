<?php

//Time and Dates

$time = time(); //current time
echo '<br>';

echo $time + 5 * 60 * 60;

$date = date('m/d/y g:ia');

echo '<br>';

echo $date;
echo '<br>';

echo date_default_timezone_get();
echo date_default_timezone_set('GMT');
