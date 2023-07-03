<?php
// Both abstract and interface cannot be instantiated.
// Abstract Class
// it can have common method, properties etc and interface rules for class that extend it
abstract class Vehicle
{
    public $brand;

    abstract public function startEngine();

    public function getBrand()
    {
        return $this->brand;
    }
}

class Car extends Vehicle
{
    public function startEngine()
    {
        echo "Starting the engine of the Car." . PHP_EOL;
    }
}

// Interface
// it have rules only. it is implemented insteand of extend in abstract class.
interface Drivable
{
    public function startEngine();
    public function accelerate();
}

class Motorcycle implements Drivable
{
    public function startEngine()
    {
        echo "Starting the engine of the Motorcycle." . PHP_EOL;
    }

    public function accelerate()
    {
        echo "Accelerating the Motorcycle." . PHP_EOL;
    }
}