<?php
class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}
