Here statically accessed property prefer property of the class for which it is called. Where as self keyword enforces
use of current class only. Refer the below example:

<?php
class a
{

    static protected $test = "class a";

    public function static_test()
    {

        echo static::$test; // Results class b
        echo self::$test; // Results class a

    }

}

class b extends a
{

    static protected $test = "class b";

}

$obj = new b();
$obj->static_test();
?>