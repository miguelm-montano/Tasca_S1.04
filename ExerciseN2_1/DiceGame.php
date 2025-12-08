<?php

class DiceGame {
    private $dice = [];
    private $totalRolls = 0;

    //Hacemos un bucle para poder tener 5 dados
    public function __construct($numDice = 5){
        for($i = 0; $i < $numDice; $i++) {
            $this->dice[] = new PokerDice();
        }
    }

    public function rollAll() {
        foreach ($this->dice as $dice) {
            $dice->roll();
        }
    }

    public function showResult() {
        foreach ($this->dice as $i => $dice) {
            echo "Dice " . ($i+1) . ": " . $dice->getLastFace() . PHP_EOL;
        }
        echo "Total: " . PokerDice::$rollCount . PHP_EOL;
        //Para mostrar cuantas veces se han tirado los dados usando el contador compartido
    }
}


?>