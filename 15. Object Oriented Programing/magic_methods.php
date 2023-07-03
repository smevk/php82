<?php

class MagicClass
{
    public function __construct()
    {
        echo "Constructor called" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Destructor called" . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        echo "Calling inaccessible method: $name" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling inaccessible static method: $name" . PHP_EOL;
    }

    public function __get($name)
    {
        echo "Accessing inaccessible property: $name" . PHP_EOL;
    }

    public function __set($name, $value)
    {
        echo "Setting inaccessible property: $name = $value" . PHP_EOL;
    }

    public function __isset($name)
    {
        echo "Checking existence of inaccessible property: $name" . PHP_EOL;
    }

    public function __unset($name)
    {
        echo "Unsetting inaccessible property: $name" . PHP_EOL;
    }

    public function __sleep()
    {
        echo "Serializing the object" . PHP_EOL;
        return ['property1', 'property2'];
    }

    public function __wakeup()
    {
        echo "Unserializing the object" . PHP_EOL;
    }

    public function __toString()
    {
        return "This is the object string representation";
    }

    public function __invoke()
    {
        echo "Object is being invoked as a function" . PHP_EOL;
    }

    public static function __set_state($array)
    {
        echo "Exporting the object state" . PHP_EOL;
        return new self();
    }

    public function __clone()
    {
        echo "Cloning the object" . PHP_EOL;
    }

    public function __debugInfo()
    {
        echo "Debugging the object" . PHP_EOL;
    }
}

$obj = new MagicClass(); // Outputs: Constructor called

$obj->nonExistingMethod(); // Outputs: Calling inaccessible method: nonExistingMethod

MagicClass::nonExistingStaticMethod(); // Outputs: Calling inaccessible static method: nonExistingStaticMethod

echo $obj->nonExistingProperty; // Outputs: Accessing inaccessible property: nonExistingProperty

$obj->nonExistingProperty = "Value"; // Outputs: Setting inaccessible property: nonExistingProperty = Value

isset($obj->nonExistingProperty); // Outputs: Checking existence of inaccessible property: nonExistingProperty

unset($obj->nonExistingProperty); // Outputs: Unsetting inaccessible property: nonExistingProperty

$serialized = serialize($obj); // Outputs: Serializing the object

$unserialized = unserialize($serialized); // Outputs: Unserializing the object

echo $obj; // Outputs: This is the object string representation

$obj(); // Outputs: Object is being invoked as a function

$exported = var_export($obj, true); // Outputs: Exporting the object state

$clone = clone $obj; // Outputs: Cloning the object

var_dump($obj); // Outputs: Debugging the object

unset($obj); // Outputs: Destructor called