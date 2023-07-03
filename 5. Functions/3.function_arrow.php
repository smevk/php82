<?php

$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
?>

<!-- nested arrow functinos -->
<?php

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_export($fn(5)(10));
?>


<!-- examples of arrow fucncs -->

<?php

fn(array $x) => $x;
static fn(): int => $x;
fn($x = 42) => $x;
fn(&$x) => $x;
fn &($x) => $x;
fn($x, ...$rest) => $rest;

?>


<?php

$x = 1;
$fn = fn() => $x++; // Has no effect
$fn();
var_export($x); // Outputs 1

?>