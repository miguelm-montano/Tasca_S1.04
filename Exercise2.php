<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.*/

class Shape {

    private float $height;
    private float $wide;

    public function __construct(float $height, float $wide) {
        $this-> height = $height;
        $this-> wide = $wide;
    }

    public function getHeight(): float {
        return $this-> height;
    }

    public function getWide(): float {
        return $this-> wide;
    }

    public function calculateArea() {

    }
}

class Triangle extends Shape {

    public function calculateArea(): float {
        return ($this->getWide() * $this->getHeight()) / 2;
    }
    
}

Class Rectangle extends Shape {

    public function calculateArea(): float {
        return $this->getWide() * $this->getHeight();
    }
}

$triangle = new Triangle(10, 5);
echo "The area of a triangle is: " . $triangle->calculateArea();

echo PHP_EOL;
$rectangle = new Rectangle(10, 5);
echo "The area of a rectangle is: " . $rectangle->calculateArea();

?>