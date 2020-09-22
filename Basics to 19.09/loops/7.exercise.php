<?php declare(strict_types=1);

class RollTwoDices
{
    function randomInt(): int
    {
        return rand(1, 6);
    }

    function count(int $firstInt, int $secondInt): int
    {
        return $firstInt + $secondInt;
    }
}

$sum = (int)readline('Desired sum: ');
while ($sum <= 1 || $sum >= 13) {
    echo 'Sum must be between and includes 2 and 12' . PHP_EOL;
    $sum = (int)readline('Desired sum: ');
}

$rollDices = new RollTwoDices();
$firstInt = $rollDices->randomInt();
$secondInt = $rollDices->randomInt();
$count = $rollDices->count($firstInt, $secondInt);

echo $firstInt . ' ' . 'and ' . $secondInt . ' = ' . $count . PHP_EOL;

while ($sum !== $rollDices->count($firstInt, $secondInt)) {
    $firstInt = $rollDices->randomInt();
    $secondInt = $rollDices->randomInt();
    $count = $rollDices->count($firstInt, $secondInt);
    echo $firstInt . ' ' . 'and ' . $secondInt . ' = ' . $count . PHP_EOL;
}

