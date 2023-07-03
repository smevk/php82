<?php
$a = 0;
$b = 1;

if ($a > $b)
    echo "a is bigger than b";
?>

<?php
if ($a > $b) {
    echo "a is bigger than b";
    $b = $a;
}
?>

<!-- easy way to execute conditional html / javascript / css / other language code with php if else: -->

<?php if (true): ?>

    <!-- html code to run if condition is true -->

<?php else: ?>

    <!-- html code to run if condition is false -->

<?php endif ?>


<?php
if ($a > $b) {
    echo "a is greater than b";
} else {
    echo "a is NOT greater than b";
}
?>


<?php

/* Correct Method: */

if ($a > $b):
    echo $a . " is greater than " . $b;
elseif ($a == $b): // Note the combination of the words.
    echo $a . " equals " . $b;
else:
    echo $a . " is neither greater than or equal to " . $b;
endif;

?>