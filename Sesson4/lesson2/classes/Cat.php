<?php class Cat extends Animal
{
    public function meow()
    {
        return $this->makeSound('meow');
    }

    public function move()
    {
        return 'move by:  ' . $this->legs . ' legs';
    }
}
