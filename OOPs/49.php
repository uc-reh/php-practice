<?php
//error handler function
// function customError($errno, $errstr)
// {
//     echo "<b>Error:</b> [$errno] $errstr<br>";
//     echo "Ending Script";
//     die();
// }

// //set error handler
// set_error_handler("customError", E_USER_WARNING);

// //trigger error
// $test = 2;
// if ($test >= 1) {
//     trigger_error("Value must be 1 or below", E_USER_WARNING);
// }

$n = 0;

try{
    if($n==0){
        throw new Exception("Invalid Entry");
    }
    $div = $n / 5;
    echo $div;
}
catch(Exception $error){
    echo $error;
}
finally{
    echo "<br>Finally We are out from try and catch";
}
?>