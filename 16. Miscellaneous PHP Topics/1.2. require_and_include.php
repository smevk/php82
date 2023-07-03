Remember, when using require that it is a statement, not a function. It's not necessary to write:
<?php
require('somefile.php');
?>

The following:
<?php
require 'somefile.php';
?>

Is preferred, it will prevent your peers from giving you a hard time and a trivial conversation about what require
really is.

If your included file returns a value, you can get it as a result from require(), i.e.

foo.php:
<?php
return "foo";
?>

$bar = require("foo.php");
echo $bar; // equals to "foo"



vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>


<?php

function foo()
{
    global $color;

    include 'vars.php';

    echo "A $color $fruit";
}

/* vars.php is in the scope of foo() so     *
 * $fruit is NOT available outside of this  *
 * scope.  $color is because we declared it *
 * as global.                               */

foo(); // A green apple
echo "A $color $fruit"; // A green

?>


<?php

/* This example assumes that www.example.com is configured to parse .php
 * files and not .txt files. Also, 'Works' here means that the variables
 * $foo and $bar are available within the included file. */

// Won't work; file.txt wasn't handled by www.example.com as PHP
include 'http://www.example.com/file.txt?foo=1&bar=2';

// Won't work; looks for a file named 'file.php?foo=1&bar=2' on the
// local filesystem.
include 'file.php?foo=1&bar=2';

// Works.
include 'http://www.example.com/file.php?foo=1&bar=2';
?>


<?php
// won't work, evaluated as include(('vars.php') == TRUE), i.e. include('1')
if (include('vars.php') == TRUE) {
    echo 'OK';
}

// works
if ((include 'vars.php') == TRUE) {
    echo 'OK';
}
?>


return.php
<?php

$var = 'PHP';

return $var;

?>

noreturn.php
<?php

$var = 'PHP';

?>

testreturns.php
<?php

$foo = include 'return.php';

echo $foo; // prints 'PHP'

$bar = include 'noreturn.php';

echo $bar; // prints 1

?>