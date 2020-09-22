<?php


$firstNum = readline("Input the 1st number: ");

$secondNum = readline("Input the 2nd number: ");

$thirdNum = readline("Input the 3rd number: ");

if ($firstNum < $secondNum) {
    if ($secondNum < $thirdNum) {
        echo $thirdNum . PHP_EOL;
    } else {
        echo $secondNum . PHP_EOL;
    }
} elseif ($firstNum > $thirdNum) {

    echo $firstNum . PHP_EOL;

} else {

    echo $thirdNum . PHP_EOL;
}
