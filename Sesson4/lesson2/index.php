<?php

require_once 'classes/Animal.php';
require_once 'classes/Dog.php';
require_once 'classes/Cat.php';
require_once 'classes/Bird.php';


$dog = new Dog();
$dog->setName('Dog');
$dog->setLegs(4);
echo $dog->bark() . '<br>';
echo $dog->move();

echo '<br>';



$cat = new Cat();
$cat->setName('Cat');
$cat->setLegs(4);
echo $cat->meow() . '<br>';
echo $cat->move();

echo '<br>';
$bird = new Bird();
$bird->setName('Bird');
$bird->setLegs(2);
echo $bird->sing() . '<br>';
echo $bird->fly();
