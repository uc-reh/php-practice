<?php
class address
{
    var $city = "Nanded";
    var $pin = "431601";
    function setaddr($arg1, $arg2)
    {
        $this->city = $arg1;
        $this->pin = $arg2;
    }
}
class myclass
{
    var $name = "Raja";
    var $obj;
    function setname($arg)
    {
        $this->name = $arg;
    }
}
$obj1 = new myclass();
$obj1->obj = new address();
echo "original object:
";
print_r($obj1);
$obj2 = clone $obj1;
$obj1->setname("Ravi");
$obj1->obj->setaddr("Mumbai", "400001");
echo "after change:
";
echo "original object:
";
print_r($obj1);
echo "cloned object:
";
print_r($obj2);
?>