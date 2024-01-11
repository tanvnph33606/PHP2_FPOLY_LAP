<?php
class Square extends Shape
{
    public $sideLength;

    public function __construct($sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function calculateArea()
    {
        return $this->sideLength * $this->sideLength;
    }
}
