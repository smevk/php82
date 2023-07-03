<!-- for those of you who think that using return in a script is the same as using exit note that: using return just exits
the execution of the current script, exit the whole execution. -->

<!-- 1. return does not stop the script if it used in used in file a which is inlucded in file b -->
<!-- 2. die will stop the execution of script regardless of file includes. -->

<!-- look at that example: -->

<!-- a.php

include("b.php");
echo "a"; -->


<!-- b.php

echo "b";
return; -->


<!-- (executing a.php:) will echo "ba". -->

<!-- whereas (b.php modified): -->

<!-- a.php
include("b.php");
echo "a"; -->

<!-- b.php
echo "b";
exit; -->

<!-- (executing a.php:) will echo "b". -->