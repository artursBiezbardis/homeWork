<?php


//echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times,
// it is NOT allowed to use built-in pow() function
$number = (int)readline('Type number to power: ' . PHP_EOL);
$pow = (int)readline('Type power: ' . PHP_EOL);
$powered = $number;
for ($n = 1; $n < $pow; $n++) {
    $powered = $powered * $number;
}
echo "{$number} to the power {$pow} is {$powered}" . PHP_EOL;