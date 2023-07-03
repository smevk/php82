<?php

class MyClass
{
    private $data = [];

    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        throw new Exception("Property $name does not exist.");
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        if ($name === 'multiply') {
            return $arguments[0] * $arguments[1];
        }
        throw new Exception("Method $name not found.");
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name === 'add') {
            return $arguments[0] + $arguments[1];
        }
        throw new Exception("Static method $name not found.");
    }
}

$obj = new MyClass();
$obj->foo = 'Hello';
echo $obj->foo; // Outputs: Hello

isset($obj->bar); // Returns: false
$obj->bar = 'World';
isset($obj->bar); // Returns: true

unset($obj->foo);
isset($obj->foo); // Returns: false

echo $obj->multiply(2, 3); // Outputs: 6
echo MyClass::add(2, 3); // Outputs: 5
