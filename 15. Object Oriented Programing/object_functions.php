<?php
interface Myinterface
{


}
class ParentClass
{
    public static function getClassName()
    {
        echo get_called_class();
    }
}
trait MyClassTrait
{

}
class MyClass extends ParentClass implements Myinterface
{
    use MyClassTrait;
    public $prop1;
    public $prop2;
    public function method1()
    {
    }

    public function method2()
    {
    }
}


//echo class_exists(MyClass::class);
//echo MyClass::getClassName();
var_dump(method_exists(MyClass::class, 'method1'));
var_dump(property_exists(MyClass::class, 'prop1'));

//var_dump(get_class_methods(MyClass::class));
//var_dump(get_class_vars(MyClass::class));

//print_r(get_declared_classes()); //return all classes that are declared in php
//print_r(get_declared_interfaces()); //return declared interfaces
