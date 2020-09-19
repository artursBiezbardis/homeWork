<?php
/*Izveidot mašīnas objektu (nav nepieciešams izmantot mantošanu / inheritance)
Auto ir marka, numura zīme, bākas tilpums (max)
Pie jauna objekta izveides bāka ir pilna

Izveido programmu, kas šo auto darbina braucot ar statisku ātrumu (nav nozīmes)
Uz ekrāna tiek katru sekundi izvadīts nobrauktie 10 kilometri, kas uzrāda marku, numura zīmi, bākas AKTUĀLO TILPUMU.

Izveidot jaunu branch ar nosakumu TASK-4
Darbu iesniegt classroomā ar linku uz ATVĒRTU PR.*/


class Car
{

    private string $name;
    private string $numberplate;
    protected int $fuelTankCapacity;
    protected int $fuelConsumption;
// pateriņš uz simts km float
//current fuel tank volume
//odometrs.

    function __construct($name, $fuelTankCapacity, $numberplate, $fuelConsumption)
    {
        $this->name = $name;
        $this->numberplate = $numberplate;
        $this->fuelTankCapacity = $fuelTankCapacity;
        $this->fuelConsumption = $fuelConsumption;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getNumberPlate(): string
    {
        return $this->numberplate;
    }

    function getFuelTankCapacity(): int
    {
        return $this->fuelTankCapacity;
    }
    function fuelConsumption(): int
    {
        return $this->fuelConsumption;
    }
    function updateFuelTankCapacity(){

    }
    function countTankCapacity($fuelTankCapacity)
    {
        $fuelTankCapacity=$fuelTankCapacity - 0.1;
        return $fuelTankCapacity - 1;
    }

    function countMileage($drivedKm)
    {
        return $drivedKm + 10;
    }

}

$vw = new Car('VW', 70, 'KK3677',0.7);
$drivedKm = 0;

$fuelTankCapacity = $vw->getFuelTankCapacity();
echo $vw->countMileage($drivedKm)
    . ',' . $vw->getName()
    . ',' . $vw->getNumberPlate()
    . ',' . $vw->countTankCapacity($fuelTankCapacity) . PHP_EOL;
sleep(1);
while ($fuelTankCapacity >= 0) {
    $drivedKm = $vw->countMileage($drivedKm);
    $fuelTankCapacity = $vw->getFuelTankCapacity();

    echo $vw->countMileage($drivedKm) . ',' . $vw->getName()
        . ',' . $vw->getNumberPlate()
        . ',' . $vw->countTankCapacity($fuelTankCapacity) . PHP_EOL;
    sleep(1);
}
