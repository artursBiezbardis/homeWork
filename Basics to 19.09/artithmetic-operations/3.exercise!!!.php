<?php
/*Write a program to produce the sum of 1, 2, 3, ...,
to 100. Store 1 and 100 in variables lower bound and upper bound,
so that we can change their values easily. Also compute and display the average.
The output shall look like:*/

$lowerBound = 1;
$upperBound = 100;
$sum = ($lowerBound + $upperBound) * 50;
$averageNum = $sum / 100;
echo "The sum of $lowerBound to $upperBound is $sum" . PHP_EOL . "The average is $averageNum" . PHP_EOL;