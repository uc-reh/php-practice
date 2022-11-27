<?php
class test1{
   private $name;
   function __construct($arg){
      $this->name=$arg;
   }
   function getname(){
      return $this->name;
   }
}
$filename="obj.txt";
$fd=fopen("obj.txt","r");
$str=fread($fd, filesize($filename));
$obj=unserialize($str);
echo "name: " . $obj->getname();

?>