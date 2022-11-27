<!doctype HTML>
<html>

<head>
    <title>Hello</title>
</head>

<body>
    <?php

//Conditions

$x = 100;

if($x>200)
{
     ?>
    <?php'<b>This is if block</b>'; ?>
    <?php
}
elseif($x<150){ ?>
    <br>This is elseif block<br>';
    <?php //netsted condition
    if($x==100){
       ?> This is Nested Block<br>';
    <?php }
// endif;
}

?>
</body>

</html>