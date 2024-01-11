<?php
class Animal
{
    public $name;
    public $sound;
    public $legs;


    public function eat()
    {
        return 'eat by mouth';
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function makeSound($sound)
    {
        return 'The ' . $this->name . ' says: ' . $sound;
    }
}
