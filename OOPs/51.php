<?php
// class myclass
// {
//     private $var;
//     protected $var1;
//     public $x, $y, $z;
//     public function __construct()
//     {
//         $this->var = "private variable";
//         $this->var1 = TRUE;
//         $this->x = 100;
//         $this->y = 200;
//         $this->z = 300;
//     }
//     public function iterate()
//     {
//         foreach ($this as $key => $value) {
//             print "$key => $value
// ";
//         }
//     }
// }
// $obj = new myclass();
// foreach ($obj as $key => $value) {
//     print "$key => $value
// ";
// }
// echo "
// ";
// $obj->iterate();

class myclass implements Iterator
{
    private $arr = array('a', 'b', 'c');
    public function rewind()
    {
        echo "rewinding
";
        reset($this->arr);
    }
    public function current()
    {
        $var = current($this->arr);
        echo "current: $var
";
        return $var;
    }
    public function key()
    {
        $var = key($this->arr);
        echo "key: $var
";
        return $var;
    }
    public function next()
    {
        $var = next($this->arr);
        echo "next: $var
";
        return $var;
    }
    public function valid()
    {
        $key = key($this->arr);
        $var = ($key !== NULL && $key !== FALSE);
        echo "valid: $var
";
        return $var;
    }
}
$obj = new myclass();
foreach ($obj as $k => $v) {
    print "$k: $v
";
}