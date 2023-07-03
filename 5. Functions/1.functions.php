<?php
function square($num)
{
    return $num * $num;
}
echo square(4); // outputs '16'.
?>

<?php
function small_numbers()
{
    return [0, 1, 2];
}
// Array destructuring will collect each member of the array individually
[$zero, $one, $two] = small_numbers();

// Prior to 7.1.0, the only equivalent alternative is using list() construct
list($zero, $one, $two) = small_numbers();

?>


Example #2 Conditional functions

<?php

$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
    function foo()
    {
        echo "I don't exist until program execution reaches me.\n";
    }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo)
    foo();

function bar()
{
    echo "I exist immediately upon program start.\n";
}

?>
Example #3 Functions within functions

<?php
function foo()
{
    function bar()
    {
        echo "I don't exist until foo() is called.\n";
    }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar();

?>