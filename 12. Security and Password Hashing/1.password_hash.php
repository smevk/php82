<?php

$password = 'my_password';

// Generate the password hash
$hash = password_hash($password, PASSWORD_DEFAULT);

// Store the hash in the database or elsewhere

// Example of verifying the password
$enteredPassword = 'my_password';

// Verify the entered password against the stored hash
if (password_verify($enteredPassword, $hash)) {
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}