<?php

spl_autoload_register(function ($className) {
    // Autoloading implementation based on the namespace and class name
    $namespace = 'App\\'; // Define the base namespace
    $classDir = 'src/'; // Specify the directory where class files are located
    // Check if the class belongs to the specified namespace
    if (strpos($className, $namespace) === 0) {
        // Get the relative class name (without the namespace)
        $relativeClassName = substr($className, strlen($namespace));

        // Convert the class name to a file path
        $filePath = str_replace('\\', '/', $relativeClassName) . '.php';

        // Check if the class file exists
        if (file_exists($classDir . $filePath)) {
            require_once $classDir . $filePath;
        }
    }
});