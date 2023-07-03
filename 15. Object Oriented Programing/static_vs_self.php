<?php
class ParentClass
{
    public static $property = 'Parent';

    public static function staticMethod()
    {
        echo static::$property . PHP_EOL;
    }
}

class ChildClass extends ParentClass
{
    public static $property = 'Child';
}

ChildClass::staticMethod(); // Outputs: Child
class MyClass
{
    public static $property = 'MyClass';

    public static function staticMethod()
    {
        echo self::$property . PHP_EOL;
    }

    public function instanceMethod()
    {
        echo self::$property . PHP_EOL;
    }
}

class ChildClass extends MyClass
{
    public static $property = 'ChildClass';

    public function instanceMethod()
    {
        echo self::$property . PHP_EOL;
    }
}

$child = new ChildClass();
$child->instanceMethod(); // Outputs: ChildClass

ChildClass::staticMethod(); // Outputs: MyClass
