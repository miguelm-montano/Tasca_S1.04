<?php

require_once "Shapes/Rectangle.php";
require_once "Shapes/Triangle.php";


$triangle = new Triangle(10, 5);
echo "The area of a triangle is: " . $triangle->calculateArea();

echo PHP_EOL;
$rectangle = new Rectangle(10, 5);
echo "The area of a rectangle is: " . $rectangle->calculateArea();
?>