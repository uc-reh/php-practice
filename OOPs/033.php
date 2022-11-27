<?php
require_once 'myclass.php';

$call_class = new PHPCLASS\MyClass();

var_dump($call_class);

$call_class->myFunc(20);

$today = new \DateTime();

echo '<br>' . $today->format('d/m/Y');


echo '<br>';
echo date('d/m/Y');
 