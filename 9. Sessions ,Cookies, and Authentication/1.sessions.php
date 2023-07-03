<?php
// Set the session save path
// session_save_path('tmp');

// Set session cache expire time
session_cache_expire(30);

// Set session cache limiter
session_cache_limiter('private');

// Start the session
session_start();






// Set session variables
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'johndoe@example.com';

// Access session variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo "Username: $username<br>";
echo "Email: $email<br>";

// Modify session variables
$_SESSION['username'] = 'JaneSmith';

// Check if a session variable exists
if (isset($_SESSION['username'])) {
    echo "Username session variable exists.<br>";
} else {
    echo "Username session variable does not exist.<br>";
}

// Get all session variables
$allVariables = $_SESSION;

echo "All session variables:<br>";
print_r($allVariables);
echo "<br>";

// Remove a session variable
unset($_SESSION['email']);

// Check if a session variable is empty
if (empty($_SESSION['email'])) {
    echo "Email session variable is empty.<br>";
} else {
    echo "Email session variable is not empty.<br>";
}



// Get session ID
$sessionId = session_id();

echo "Session ID: $sessionId<br>";

// Get the current session status
$sessionStatus = session_status();

echo "Session Status: $sessionStatus<br>";

// Set session name
session_name('MySession');

// Get session name
$sessionName = session_name();

echo "Session Name: $sessionName<br>";

// Regenerate session ID
session_regenerate_id();

// Get session module name
$sessionModuleName = session_module_name();

echo "Session Module Name: $sessionModuleName<br>";

// Set session cookie parameters
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => 'example.com',
    'secure' => true,
    'httponly' => true
]);

// Get session cookie parameters
$cookieParams = session_get_cookie_params();

echo "Session Cookie Parameters:<br>";
print_r($cookieParams);
echo "<br>";

// Set custom session save handler
// Example: session_set_save_handler($handler);

// Set session data
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'johndoe@example.com';

// Access session variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo "Username: $username<br>";
echo "Email: $email<br>";

// Unset session variables
unset($_SESSION['email']);

// Destroy the session
// session_destroy();
?>