<?php
// This switch statement:
$i = 1;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

// Is equivalent to:

if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} elseif ($i == 2) {
    echo "i equals 2";
}
?>


<!-- match -->
<!-- as of php 8.0 -->
<!-- strict checking ===. unlinke switch == -->
<?php
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
}; //simicolon is must here

var_dump($return_value); //string(19) "This food is a cake"

?>

<?php

function days_in_month1(string $month, $year): int
{

    return match (strtolower(substr($month, 0, 3))) {

        'jan' => 31,

        'feb' => is_leap($year) ? 29 : 28,

        'mar' => 31,

        'apr' => 30,

        'may' => 31,

        'jun' => 30,

        'jul' => 31,

        'aug' => 31,

        'sep' => 30,

        'oct' => 31,

        'nov' => 30,

        'dec' => 31,

        default => throw new InvalidArgumentException("Bogus month"),

    };

}

?>


<!-- can be more concisely written as -->

<?php

function days_in_month(string $month, $year): int
{

    return match (strtolower(substr($month, 0, 3))) {

        'apr', 'jun', 'sep', 'nov' => 30,

        'jan', 'mar', 'may', 'jul', 'aug', 'oct', 'dec' => 31,

        'feb' => is_leap($year) ? 29 : 28,

        default => throw new InvalidArgumentException("Bogus month"),

    };

}
echo days_in_month('nov', 2023);
?>