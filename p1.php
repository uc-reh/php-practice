<?php
//Learning about variable and constants

$my_name = 'Abdul Rehman';
$my_name = 'Rehman Abdul';
echo $my_name;

//using define finction

//define('college_name','Mangalmay Institute of Management and Technology');
define('college_name','Mangalmay Institute of Engineering and Technology');
echo "<br>";
echo 'College Name is : '.college_name;
//const year_of_birth = '2001';
echo "<br>";
const year_of_birth = '2002';
echo 'DOB is : '.year_of_birth;

$company_name = 'uCertify';
$$company_name = 'jigyasa';
echo '<br>';
echo $company_name."<br>".$uCertify;

?>