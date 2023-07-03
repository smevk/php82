<?php

class Vehicle
{
    final public function startEngine()
    {
        echo "Engine started!" . PHP_EOL;
    }
}

class Car extends Vehicle
{
    // Error: Cannot override final method Vehicle::startEngine()
    // public function startEngine() {}
}

$car = new Car();
$car->startEngine();



class Vehicle
{
    final public function startEngine()
    {
        echo "Engine started!" . PHP_EOL;
    }
}

class Car extends Vehicle
{
    // Error: Cannot override final method Vehicle::startEngine()
    // public function startEngine() {}
}

$car = new Car();
$car->startEngine();