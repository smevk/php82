<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') { //it will stop after reaching stop. stop will not be echod.
        break; /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* Using the optional argument. */

$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1; /* Exit only the switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            break 2; /* Exit the switch and the while. break 2 is last level. no break 3 */
        default:
            break;
    }
}
?>