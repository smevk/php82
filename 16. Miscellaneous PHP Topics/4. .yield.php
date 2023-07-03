<?php

function generateNumbers($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        yield $i; // Yielding a value
    }
}

// Using the generator
$numbers = generateNumbers(1, 5);

foreach ($numbers as $number) {
    echo $number . ' ';
}