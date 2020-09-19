<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456, 2456, 2456
];

//todo check if an array contains a value user entered

$searchInput=(int) readline('Enter the value to search for: ');
$countAndPosOfNumber=[];
$positionInArray=-1;
$countIndex=-1;

foreach ($numbers as $number) {

    if ($number === $searchInput) {
        $countAndPosOfNumber[$countIndex] = $positionInArray;
        $countIndex++;
    }

    $positionInArray++;
}

if ($countIndex===-1){


    echo 'Array does not contain entered number.'.PHP_EOL;
}else{

    if ($countIndex===0)
    echo 'This number is in array index ['.$positionInArray.'].'.PHP_EOL;
    else {

        echo 'This number is in '.($countIndex+1).' indexes of array.In indexes ['.implode("] [",$countAndPosOfNumber).'].'.PHP_EOL;}
}
