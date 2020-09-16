<?php declare(strict_types=1);

class Person
{
    private string $name;
    private ?string $secondName;
    private string $surname;

    function __construct(string $name, string $surname, string $secondName = null)
    {
        $this->name = $name;
        $this->secondName = $secondName;
        $this->surname = $surname;
    }

    function getName()
    {
        return $this->name;
    }

    function getSecondName()
    {
        return $this->secondName;
    }

    function getSurname()
    {
        return $this->surname;
    }
}


$person1 = new Person('Annija', 'Anna', 'Rabša');
$person2 = new Person('Elīna', 'Elīza', 'Prātīgā');
$person3 = new Person('Verner', 'Verķis');

echo $person1->getName() . ' ' . $person1->getSecondName() . ' ' . $person1->getSurname() . PHP_EOL;
echo $person2->getName() . ' ' . $person2->getSecondName() . ' ' . $person2->getSurname() . PHP_EOL;
echo $person3->getName() . ' ' . $person3->getSecondName() . ' ' . $person3->getSurname() . PHP_EOL;

