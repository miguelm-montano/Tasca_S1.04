<?php
/*Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).*/

class Employee {

    private string $name;
    private float $salary;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

  
    public function printInfoEmployee(): void {
        echo "Employee Name: " . $this->name . PHP_EOL;

        if($this->salary > 6000) {
            echo "Current salary: " . $this->salary . "$ You must pay taxes. Taxes applies to salaries over 6000$"; PHP_EOL;
        } else {
            echo "You don't have to pay taxes; this only applies to salaries over 6000.";
        }

    }
}

//Examples - Two ways of 
$employee1 = new Employee("Miguel", 8000);
$employee1 -> printInfoEmployee();

echo PHP_EOL . PHP_EOL;
$employee2 = new Employee("Montaño", 2000);
$employee2 -> printInfoEmployee();

?>