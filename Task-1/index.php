<?php

require_once './app/SpicesCollection.php';
require_once './app/Spices.php';


//require_once './app/Spices/Curry.php';
//require_once './app/Spices/Salt.php';
//require_once './app/Spices/Asafoetida.php';

foreach (glob('app/Spices/*.php') as $filename) {
    require_once $filename;
}

use SpicesCollection\SpicesCollection;
use Spices\{Curry, Salt, Asafoetida};

$spices = new SpicesCollection();

$spices->add(new Curry());
$spices->add(new Salt());
$spices->add(new Asafoetida());

foreach ($spices->all() as $spice) {
    echo $spice->getSpice() . PHP_EOL;
}
