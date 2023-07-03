<?php

// Database connection settings
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbName = 'your_database';

// Create a new mysqli instance
$mysqli = mysqli_connect($host, $username, $password, $dbName);

// Check if the connection was successful
if (!$mysqli) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Function to sanitize user inputs
function sanitize($data)
{
    global $mysqli;
    $data = trim($data);
    $data = mysqli_real_escape_string($mysqli, $data);
    return $data;
}

// UPDATE query example
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);

    // Perform the query
    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = '$id'";
    if (mysqli_query($mysqli, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}

// DELETE query example
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $id = $_GET['id'];

    // Perform the query
    $query = "DELETE FROM users WHERE id = '$id'";
    if (mysqli_query($mysqli, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}


// GET query example
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Perform the query
    $query = "SELECT * FROM users";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "No records found.";
    }
}


// Close the database connection
mysqli_close($mysqli);

?>