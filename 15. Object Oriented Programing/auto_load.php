<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new MyClass1();
$obj2 = new MyClass2();
?>


<!-- This is my autoloader for my PSR-4 clases. I prefer to use composer's autoloader, but this works for legacy projects that can't use composer. -->

<?php
/**
 * Simple autoloader, so we don't need Composer just for this.
 */
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}
Autoloader::register();