<?php declare(strict_types=1);
$numInput = (int)readline('Write positive integer: ');
$countDigits = (int)0;
if ($numInput > 0) {
    $countDigits = strlen($numInput);
}
echo "Number with $countDigits digits" . PHP_EOL;
//sapratu ka nolasa positivu int,bet pārējos nenolasa.