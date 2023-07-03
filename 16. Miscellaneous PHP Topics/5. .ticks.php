<?php

// tick_handler function is called with every operation
// tick_handler is stopped upon reaching unregister function
// ticks are used for debugging and testing performance of the script
// they should not be used in producton


// basic example
declare(ticks=1);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler'); // causes a tick event

$a = 1; // causes a tick event

if ($a > 0) {
    $a += 2; // causes a tick event
    print($a); // causes a tick event
}

unregister_tick_function('tick_handler');



// advance and realistic example

declare(ticks=1);

// Function to handle ticks
function tickHandler()
{
    echo "Memory Usage: " . memory_get_usage() . " bytes" . PHP_EOL;
}

// Register the tick function
register_tick_function('tickHandler');

// Perform a memory-intensive operation
$numbers = [];
for ($i = 0; $i < 1000000; $i++) {
    $numbers[] = $i;
}

// Unregister the tick function
unregister_tick_function('tickHandler');

?>