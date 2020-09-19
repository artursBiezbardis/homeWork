<?php
/*Modify the example program to compute the
 position of an object after falling for 10 seconds,
 outputting the position in meters. The formula in Math notation is:*/
// position= -490.5m
$acceleration = -9.8;
$time = 10;
$initPosition = -0.5;
$initVelocity = 0;
$position = -490.5;

$position = 0.5 * $acceleration * $time ** 2 + $initVelocity * $time + $initPosition;

echo 'Object position is ' . $position . ' m' . PHP_EOL;