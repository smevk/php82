<?php

// Arithmetic expressions
$result = 10 + 5; // Addition
echo "10 + 5 = " . $result . "<br>";

$result = 20 - 8; // Subtraction
echo "20 - 8 = " . $result . "<br>";

$result = 6 * 4; // Multiplication
echo "6 * 4 = " . $result . "<br>";

$result = 25 / 5; // Division
echo "25 / 5 = " . $result . "<br>";

$result = 15 % 4; // Modulus (remainder)
echo "15 % 4 = " . $result . "<br>";

// String concatenation
$name = "John";
$greeting = "Hello, " . $name . "!";
echo $greeting . "<br>";

// Comparison expressions
$num1 = 10;
$num2 = 5;
$result = $num1 > $num2; // Greater than
echo $num1 . " > " . $num2 . ": " . var_export($result) . "<br>";

$result = $num1 <= $num2; // Less than or equal to
echo $num1 . " <= " . $num2 . ": " . var_export($result) . "<br>";

$result = $num1 == $num2; // Equal to
echo $num1 . " == " . $num2 . ": " . var_export($result) . "<br>";

$result = $num1 != $num2; // Not equal to
echo $num1 . " != " . $num2 . ": " . var_export($result) . "<br>";

// Logical expressions
$a = true;
$b = false;
$result = $a && $b; // AND
echo var_export($a, true) . " && " . var_export($b, true) . ": " . var_export($result, true) . "<br>";

$result = $a || $b; // OR
echo var_export($a, true) . " || " . var_export($b, true) . ": " . var_export($result, true) . "<br>";

$result = !$a; // NOT
echo "!" . var_export($a, true) . ": " . var_export($result, true) . "<br>";

// Ternary operator
$age = 25;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age: " . $age . ", Status: " . $status . "<br>";

?>