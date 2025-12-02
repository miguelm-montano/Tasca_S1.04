<?php

require_once "Shape.php";
Class Rectangle extends Shape {

    public function calculateArea(): float {
        return $this->getWide() * $this->getHeight();
    }
}
?>