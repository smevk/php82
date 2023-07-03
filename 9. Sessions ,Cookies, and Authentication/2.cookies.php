<?php

class Myclass
{
    public $test = "hello";
}
$class = new Myclass();
$class->test = 'hi there';
// Set a cookie
setcookie('username', 'John Doe', time() + 3600, '/');
setcookie('myclass', serialize($class), time() + 3600, '/');
$myclass = unserialize($_COOKIE['myclass']);
echo $myclass->test;
// Access the cookie value if it exists
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Welcome back, $username!";
} else {
    echo "Cookie does not exist.";
}

// Modify a cookie
setcookie('username', 'Jane Smith', time() + 3600, '/');

// Delete a cookie
setcookie('username', '', time() - 3600, '/');

// Access a non-existent cookie
if (isset($_COOKIE['username'])) {
    echo "Cookie value: " . $_COOKIE['username'];
} else {
    echo "Cookie does not exist.";
}
?>