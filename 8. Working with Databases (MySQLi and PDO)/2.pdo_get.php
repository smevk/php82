<?php

// Database connection settings
$dsn = 'mysql:host=localhost;dbname=mydatabase';
$username = 'your_username';
$password = 'your_password';

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perform a simple query
    $stmt = $pdo->query("SELECT * FROM users");

    // Fetch all rows
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the rows and display data
    foreach ($rows as $row) {
        echo "User: " . $row['username'] . ", Email: " . $row['email'] . "<br>";
    }
} catch (PDOException $e) {
    // Handle any database errors
    echo "Error: " . $e->getMessage();
}