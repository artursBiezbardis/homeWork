<?php declare(strict_types=1);


function fizzbuzz(int $i): string
{
    if ($i % 5 === 0 && $i % 3 === 0) {
        return 'FizzBuzz ';
    } elseif ($i % 5 === 0) {
        return 'Buzz ';
    } elseif ($i % 3 === 0) {
        return 'Fizz ';
    } else {
        return strval($i) . ' ';
    }
    
}

$inputNumber = (int)readline('Type FizzBuzz Nr:');

if ($inputNumber > 100) {
    $inputNumber = 100;
}

for ($i = 1; $i <= $inputNumber; $i++) {
    switch ($i) {
        case 20:
        case 40:
        case 60:
        case 80:
        case 100:
            echo fizzbuzz($i) . PHP_EOL;
            break;
        default:
            echo fizzbuzz($i);


    }
}
echo PHP_EOL;
