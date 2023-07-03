<?php
// Base class
class Vehicle
{
    public $brand;
    public $color;
    const CONSTANT = 'constant value';

    function showConstant()
    {
        echo self::CONSTANT . "\n";
    }

    public function startEngine()
    {
        echo "The $this->brand vehicle with $this->color color has started the engine." . PHP_EOL;
    }
}

// Derived class (subclass)
class Car extends Vehicle
{
    public $numDoors;

    public function openDoors()
    {
        echo "Opening $this->numDoors doors of the $this->brand car." . PHP_EOL;
    }
}

// Create an object of the derived class
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "blue";
$myCar->numDoors = 4;

// Call methods from the base and derived classes
$myCar->startEngine(); // Output: The Toyota vehicle with blue color has started the engine.
$myCar->openDoors(); // Output: Opening 4 doors of the Toyota car.
?>