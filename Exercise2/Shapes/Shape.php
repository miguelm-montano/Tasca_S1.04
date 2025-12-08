<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.*/

class Shape {

    private float $height;
    private float $width;

    public function __construct(float $height, float $width) {
        $this-> height = $height;
        $this-> width = $width;
    }

    public function getHeight(): float {
        return $this-> height;
    }

    public function getWidth(): float {
        return $this-> width;
    }

    public function calculateArea() {

    }
}

?>