<?php

$array1 = [];
$array2 = [];
$arrNum = 0;

for ($i = 0; $i < 10; $i++) {
    if ($i < 9) {
        $arrNum = rand(1, 100);
        $array1[$i] = $arrNum;
        $array2[$i] = $arrNum;
    } else {
        $arrNum = rand(1, 100);
        $array1[$i] = -7;
        $array2[$i] = $arrNum;
    }
}
echo 'Array 1: ' . implode(' ', $array1) . PHP_EOL .
    'Array 2: ' . implode(' ', $array2) . PHP_EOL;