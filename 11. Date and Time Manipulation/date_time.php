<?php
// Get the current date and time
echo date("Y-m-d H:i:s") . "\n";

// Get the current Unix timestamp
echo time() . "\n";

// Parse a date string and convert it to a Unix timestamp
echo strtotime("next Monday") . "\n";

// Perform date calculations and formatting
echo date("Y-m-d", strtotime("+1 week")) . "\n";

// Create a DateTime object and format the date
$date = new DateTime();
echo $date->format("Y-m-d H:i:s") . "\n";

// Set the default timezone
date_default_timezone_set("America/New_York");

// Perform date calculations using DateTime objects
$date = new DateTime("2023-06-20");
$date->modify("+1 day");
echo $date->format("Y-m-d") . "\n";
?>