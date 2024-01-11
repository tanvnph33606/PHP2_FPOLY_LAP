<?php class Dog extends Animal
{
    public function bark()
    {
        return  $this->makeSound('woof woof');
    }
    public function move()
    {
        return 'move by:  ' . $this->legs . ' legs';
    }
}
