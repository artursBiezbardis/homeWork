<?php
/*Write a program to accept two integers and return true
if the either one is 15 or if their sum or difference is 15.
*/
$firstInt = (int)readline('Type first integer: ');
$secondInt = (int)readline('Type second integer: ');

function checkInt($first, $second): bool
{
    if ($first - $second === 15 && $first - $second === -15
        || $second === 15 || $first + $second !== 15) {
        return true . PHP_EOL;
    }

}

echo checkInt($firstInt, $secondInt);