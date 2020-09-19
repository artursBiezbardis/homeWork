<?php
/*Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10),
 as an int. Take note that it is the same as factorial of N.*/
//factorial of N multiply from highest to lowest!!!

$factorialOfN = (int)readline('Enter integer to see its factorial : ');
$cycleVal = 1;
for ($i = 0; $i <= $factorialOfN; $i++) {
    if ($i !== $factorialOfN) {
        $cycleVal = $cycleVal * ($i + 1);
        // echo $cycleVal.PHP_EOL;
    } else {
        echo 'Factorial of N is ' . $cycleVal . PHP_EOL;
    }

}