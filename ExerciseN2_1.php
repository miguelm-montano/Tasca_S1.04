<?php
/*Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Ha de tenir un mètode que no faci altra cosa que tirar el dau.
Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.*/

Class PokerDice {

    private $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private $lastRoll = null;
    private static $totalRolls = 0; //Anotación para mi: cuando usamos un atributo static significa que pertenece a la clase, no al objeto.

    public function roll() {

        $index = random_int(0, count($this->faces) - 1);
        $this->lastRoll = $this->faces[$index];
        self::$totalRolls++;
        return $this->lastRoll;
    }

    public function getLastRoll() {
        return $this->lastRoll;
    }

    public static function getTotalRolls() {
        return self::$totalRolls;
    }
}

//Example - 5 dice
$dice = [];
for($i = 0; $i < 5; $i++) {
    $dice[$i] = new PokerDice();
}

//Roll every dice
foreach ($dice as $index => $singleDice) {
    echo "Dice " . ($index + 1) . " - " . $singleDice->roll() . PHP_EOL;
}

echo "Total rolls: " . PokerDice::getTotalRolls();


?>