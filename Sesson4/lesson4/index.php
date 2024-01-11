<?php
require_once 'classes/Shape.php';
require_once 'classes/Circle.php';
require_once 'classes/Square.php';


$square = new Square(5);
echo "the square: " . $square->calculateArea();

echo "<br>";

$circle = new Circle(3);
echo "the circle: " . $circle->calculateArea();
