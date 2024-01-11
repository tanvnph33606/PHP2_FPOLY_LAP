<?php

class Adult extends Person
{
    public $breath;

    function walk()
    {
        return 'walk by:  ' . $this->legs . ' legs';
    }
}
