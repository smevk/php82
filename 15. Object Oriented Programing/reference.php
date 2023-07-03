<?php

class MyClass
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

$obj1 = new MyClass('Object 1');
$obj2 = $obj1; // Create a reference to $obj1

$obj2->data = 'Modified Object 1'; // Modify the object using $obj2 reference

echo $obj1->getData(); // Outputs: Modified Object 1
