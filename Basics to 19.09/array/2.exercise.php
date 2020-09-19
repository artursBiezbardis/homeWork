<?php


$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$countArr = 0;
$sum = 0;

foreach ($numbers as $number) {
    $countArr++;
    $sum = $sum + $number;
}
echo $sum / $countArr . PHP_EOL;