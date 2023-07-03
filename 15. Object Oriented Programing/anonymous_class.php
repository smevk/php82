<?php
// used for one time thing and limited scope
class ParentClass
{
    public function parentMethod()
    {
        echo "Parent method" . PHP_EOL;
    }
}

$child = new class extends ParentClass {
    public function childMethod()
    {
        echo "Child method" . PHP_EOL;
    }
};

$child->parentMethod(); // Outputs: Parent method
$child->childMethod(); // Outputs: Child method
