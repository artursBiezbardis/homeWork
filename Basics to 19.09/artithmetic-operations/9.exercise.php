<?php

$weight = readline('Type your weight in kg: ');
$height = readline('Type your height in m: ');
$index = $weight / $height ** 2;

const UNDER_WEIGHT = 18.5;
const OVER_WEIGHT = 25;

if ($index >= UNDER_WEIGHT && $index <= OVER_WEIGHT) {
    echo 'You have optimal weight.' . PHP_EOL;
} elseif ($index < UNDER_WEIGHT) {
    echo 'You are underweight.' . PHP_EOL;
} else {
    echo 'You are overweight.' . PHP_EOL;
}