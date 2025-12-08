<?php

class PokerDice {

    private $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private $lastFace = null;
    //Usamos null porque aun no se ha lanzado el dado.

    //Propiedad que van a compartir todos los dados - variable de clase, no de objeto
    public static $rollCount = 0;

    public function roll() {
        $index = rand(0, count($this->faces) - 1);
        //Generamos un numero random entre 0 y 5
        $this->lastFace = $this->faces[$index];
        //Guardamos la cara que ha salido

        PokerDice::$rollCount++;
        //Suma al cotador global de tiradas 
    }

    public function getLastFace() {
        return $this->lastFace;
    }
}


?>