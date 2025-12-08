<?php

require_once "PokerDice.php";
require_once "DiceGame.php";

$game = new DiceGame(5);
$game->rollAll();
$game->showResult();

?>