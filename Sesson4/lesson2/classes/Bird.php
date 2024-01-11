<?php class Bird extends Animal
{
    public $wing;
    public function sing()
    {
        return $this->makeSound('chirp chirp');
    }

    public function fly()
    {
        return 'fly by:  ' . $this->wing . ' wings';
    }
}
