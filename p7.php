<?php

$first_name = 'Abdul';
$last_name = 'Rehman';
$full_name = "$first_name" . " " . "$last_name";

echo $first_name.'<br>';
echo $last_name.'<br>';
echo $full_name.'<br>';
echo "Short Form Is : " . " " . $first_name[0] .$last_name[0].'<br>';

//HERDOC

$string_her = <<<TEXT

HELLO 
PHP 
TEXT;

echo nl2br($string_her).'<br>';

//NOWDOC

$string_now = <<<'TEXT'
HELLO 
PHP 
Line 3\\
Value
TEXT;

echo $string_now;