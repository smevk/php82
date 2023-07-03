<?php

class Another
{

}
/**
 * Summary of Test
 * Param @test
 */

class Test
{
    public $test = "name";
    protected $hello;
    /**
     * Summary of __construct
     * @param mixed $test
     */
    public function __construct($test, Another $another)
    {
        $this->test = "test";
    }

    protected function hello()
    {

    }

    private function whyMe()
    {

    }

}

$ref = new ReflectionClass(Test::class);
echo var_dump($ref->getConstructor()->getParameters()[1]->getClass());