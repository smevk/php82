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

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

        // Bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        // Execute the statement
        $stmt->execute();

        // Display success message
        echo "Data inserted successfully!";
    }
} catch (PDOException $e) {
    // Handle any database errors
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP PDO POST Example</title>
</head>

<body>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>