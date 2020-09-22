<?php declare(strict_types=1);
$inValue = readline('Type Number: ');

if (!is_numeric($inValue)) {
    echo 'bye!' . PHP_EOL;
} else {
    $ifFloatToInt = (int)str_replace('.', '', $inValue);
    $inValue = $ifFloatToInt;
    if ($inValue % 2 !== 0) {
        echo 'Odd Number' . PHP_EOL;
    } else {
        echo 'Even Number' . PHP_EOL;
    }

}

