<?php

class College{

    // protected string $name = 'Abdul';

    public function details(string $course, int $year) :void
    {
        echo 'Course is'.$course.'and year is : '.$year;
    }
}

class myClass extends College
{
    
    public function details(string $course, int $year, int $roll) :void
    
    {
        //  string $name = 'Abdul';
        echo 'Course is' . $course . 'and year is : ' . $year . 'roll no. is : ' . $roll;
    }
}

$obj = new myClass();

echo $obj->details('BCA', 2023,02);