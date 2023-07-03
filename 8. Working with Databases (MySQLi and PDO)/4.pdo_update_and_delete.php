<?php

// Database connection settings
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbName = 'your_database';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // DELETE function
    function deleteRecord($id)
    {
        global $pdo;

        // Prepare the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");

        // Bind the parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        $stmt->execute();

        // Check if the DELETE query affected any rows
        if ($stmt->rowCount() > 0) {
            echo "Record deleted successfully.";
        } else {
            echo "No records found with the provided ID.";
        }
    }

    // UPDATE function
    function updateRecord($id, $name, $email)
    {
        global $pdo;

        // Prepare the UPDATE statement
        $stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");

        // Bind the parameters
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // Check if the UPDATE query affected any rows
        if ($stmt->rowCount() > 0) {
            echo "Record updated successfully.";
        } else {
            echo "No records found with the provided ID.";
        }
    }

    // Example usage
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            deleteRecord($id);
        } elseif (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            updateRecord($id, $name, $email);
        }
    }

    // Close the database connection
    $pdo = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>