<?php
class Person
{
    public $arm;
    public $legs;
    public $eye;
    public $noise;

    public function eat()
    {
        return 'eat by mouth';
    }

    public function setArm($arm)
    {
        $this->arm = $arm;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }
}
