<?php
include '10.exercise.php';
echo 'Geometry calculator:' . PHP_EOL . PHP_EOL .
    '1 Calculate the Area of a Circle' . PHP_EOL .
    '2 Calculate the Area of a Rectangle' . PHP_EOL .
    '3 Calculate the Area of a Triangle' . PHP_EOL .
    '4 Quit' . PHP_EOL;
$options = readline('Enter your choice (1-4): ');

if ($options > 4 || $options <= 0) {
    echo 'Wrong chose, restart Program and chose from 1 - 4' . PHP_EOL;
} else {
    switch ($options) {
        case 1:
            $circle= readline('Enter radius: ');
            echo Geometry::circleArea($circle) . PHP_EOL;
            break;
        case 2:
            $lengthT= readline('Enter length: ');
            $widthT= readline('Enter width: ');
            echo Geometry::rectangleArea($lengthT, $widthT) . PHP_EOL;
            break;
        case 3:
            $base=readline('Enter base: ');
            $height=readline('Enter height: ');
            Geometry::triangleArea(10, -10);
            break;
        case 4:
            break;

    }
}
