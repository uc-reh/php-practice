<?php

// trigger_error('Example Error', E_ALL & ~E_WARNING);

// error_reporting(E_ALL & ~E_WARNING);
ini_set('error_reporting', E_ALL & ~E_WARNING);
echo 1;

error_log("The error is saved as :", null, null);