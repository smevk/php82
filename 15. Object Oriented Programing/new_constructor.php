<?php

// intead of this

class Point
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

// below is the same thing. as of php 8.0
class Point
{
    public function __construct(protected int $x, protected int $y = 0)
    {
    }
}