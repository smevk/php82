<?php

// goto should not be used frequently. It make code hard to read.
// goto is used for jumping between coces.
goto a;
echo 'Foo'; //it is skpped

a: //a: is a label. label can by of any name folowing by collon :
echo 'Bar'; //it is echoed
?>

<!-- You can jump inside the same switch. This can be usefull to jump to default -->
<?php
$x = 3;
switch ($x) {
    case 0:
    case 3:
        print($x);
        if ($x)
            goto def;
    case 5:
        $x = 6;
    default:
        def:
        print($x);
}
?>