<?php
// Define a class
class Car
{
    // Properties
    public $brand;
    public $color;

    // Method
    public function startEngine()
    {
        echo "The $this->brand car with $this->color color has started the engine." . PHP_EOL;
    }
}

// Create an object of the class
$myCar = new Car();

// Set object properties
$myCar->brand = "Toyota";
$myCar->color = "blue";

// Call object method
$myCar->startEngine(); // Output: The Toyota car with blue color has started the engine.
?>