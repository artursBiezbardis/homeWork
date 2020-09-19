<?php declare(strict_types=1);

/*Izveidot galveno objektu - automašīna
Objektam ir vārds un bākas kopējais tilpums X

Izveidot 2-3 child objektus - auto markas
Katrai auto markai ir 1 UNIKALA funkcija VAI mainīgais (property) kas satur vērtību.

Izvade: Auto vārds (bākas tilpums) + vērtība kas nāk no funkcijas vai mainīgā (property) katram auto unikālam
Kā pārbaudīt vai objekts ir attiecīgās markas instance? (Meklēt google)

Darba veikšana:
Darbu veicam projektā, no mājasdarba "GIT PR"
Izveidojam jaunu branch - TASK-3

Darba iesniegšana
Darbu iesniedzam ClassRoom linku uz ATVĒRTU PR (pull request)*/


class Car
{

    private string $name;
    private int $fuelTankCapacity;

    function __construct($name, $fuelTankCapacity)
    {
        $this->name = $name;
        $this->fuelTankCapacity = $fuelTankCapacity;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getFuelTankCapacity(): int
    {
        return $this->fuelTankCapacity;
    }
}

class Ferarri extends Car
{
    public function color(): string
    {
        return 'color red';
    }

}

class Porsche extends Car
{
    public function headLights()
    {
        return 'oval head lights';
    }
}

$cars = [
    new Ferarri('Ferarri', 80),
    new Porsche('Porsche', 95)
];

foreach ($cars as $car) {
    echo $car->getName() . ' full tank capacity ' . $car->getFuelTankCapacity() . '. ';
    if ($car instanceof Ferarri) {
        echo 'The main feature is ' . $car->color() . '.' . PHP_EOL;
    } elseif ($car instanceof Porsche) {
        echo 'The main feature is ' . $car->headLights() . '.' . PHP_EOL;
    }
}