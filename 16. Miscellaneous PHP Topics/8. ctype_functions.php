<?php

// these are just helper functions not used in laravel
// can be usefull in algorithems

$string = "Hello123";

// ctype_alnum() - Check for alphanumeric characters
if (ctype_alnum($string)) {
    echo "The string contains only alphanumeric characters." . PHP_EOL;
} else {
    echo "The string contains non-alphanumeric characters." . PHP_EOL;
}

// ctype_alpha() - Check for alphabetic characters
if (ctype_alpha($string)) {
    echo "The string contains only alphabetic characters." . PHP_EOL;
} else {
    echo "The string contains non-alphabetic characters." . PHP_EOL;
}

// ctype_cntrl() - Check for control characters
if (ctype_cntrl($string)) {
    echo "The string contains only control characters." . PHP_EOL;
} else {
    echo "The string contains non-control characters." . PHP_EOL;
}

// ctype_digit() - Check for numeric characters
if (ctype_digit($string)) {
    echo "The string contains only digits." . PHP_EOL;
} else {
    echo "The string contains non-digit characters." . PHP_EOL;
}

// ctype_graph() - Check for printable characters except space
if (ctype_graph($string)) {
    echo "The string contains only printable characters except space." . PHP_EOL;
} else {
    echo "The string contains non-printable or space characters." . PHP_EOL;
}

// ctype_lower() - Check for lowercase characters
if (ctype_lower($string)) {
    echo "The string contains only lowercase characters." . PHP_EOL;
} else {
    echo "The string contains non-lowercase characters." . PHP_EOL;
}

// ctype_print() - Check for printable characters
if (ctype_print($string)) {
    echo "The string contains only printable characters." . PHP_EOL;
} else {
    echo "The string contains non-printable characters." . PHP_EOL;
}

// ctype_punct() - Check for punctuation characters
if (ctype_punct($string)) {
    echo "The string contains only punctuation characters." . PHP_EOL;
} else {
    echo "The string contains non-punctuation characters." . PHP_EOL;
}

// ctype_space() - Check for whitespace characters
if (ctype_space($string)) {
    echo "The string contains only whitespace characters." . PHP_EOL;
} else {
    echo "The string contains non-whitespace characters." . PHP_EOL;
}

// ctype_upper() - Check for uppercase characters
if (ctype_upper($string)) {
    echo "The string contains only uppercase characters." . PHP_EOL;
} else {
    echo "The string contains non-uppercase characters." . PHP_EOL;
}

// ctype_xdigit() - Check for hexadecimal characters
if (ctype_xdigit($string)) {
    echo "The string contains only hexadecimal characters." . PHP_EOL;
} else {
    echo "The string contains non-hexadecimal characters." . PHP_EOL;
}
?>