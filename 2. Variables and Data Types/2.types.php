<?php

// null
$null = null;
// bool
$boolean = true; //true or false

// int

$int = 82; //any numeric value

// float (floating-point number)

$float = 82.23; //float value. intiger with decimal points

// string
$string = "This is string value"; // any alpha numeric value surrounded by qout or double qout

// array
$array = ['red', 'green', 'blue']; //multiple values in one variable. this is colors example
$assoc_array = [
    'stop' => 'red',
    'go' => 'green',
    'warning' => 'yellow'
]; //multiple values in one variable. this is colors example

// object
$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class { }; // Instantiate anonymous class
$obj3 = (object) ['red', 'green', 'blue']; // Cast empty array to object


// callable or anonymous functions
$closure = function ($a) {
    return $a * 2;
};


// class

class MyClass
{
    public function sayHello()
    {
        echo "Hello, world!";
    }
}

// Store the class in a variable
$className = 'MyClass';

// Create an instance of the class using the variable
$instance = new $className();

// Call a method on the instance
$instance->sayHello(); // Output: Hello, world!




// anonymous class

// Create an anonymous class
$anonymousClass = new class {
    public function sayHello()
    {
        echo "Hello, world!";
    }
};

// Create an instance of the anonymous class
$instance = new $anonymousClass;

// Call a method on the instance
$instance->sayHello(); // Output: Hello, world!


echo get_debug_type($obj3);


?>