<?php

require_once "Employee.php";

//test
//Examples - Two ways of 
$employee1 = new Employee("Miguel", 8000);
$employee1 -> printInfoEmployee();

echo PHP_EOL . PHP_EOL;
$employee2 = new Employee("Montaño", 2000);
$employee2 -> printInfoEmployee();

?>