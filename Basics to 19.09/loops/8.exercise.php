<?php declare(strict_types=1);

class NumberSquare
{

    public function createString(int $minNum, int $maxNum): string
    {
        $numString = '';
        for ($i = $minNum; $i <= $maxNum; $i++) {
            $numString = $numString . $i;
        }
        return $numString;
    }

    public function shiftDigits(string $numString,int $maxNum):string
    {
        return substr($numString, 1, $maxNum - 1) . $numString[0];
    }

}

$numSquare = new NumberSquare();
$minNum = (int)readline('Min? ');
$maxNum = (int)readline('Max? ');
$numString = $numSquare->createString($minNum, $maxNum);
$loopCycleCounter = 1;
$loopCycles = strlen($numString) - 1;

echo $numString . PHP_EOL;

while ($loopCycleCounter <= $loopCycles) {
    $loopCycleCounter++;
    $numString = $numSquare->shiftDigits($numString, $maxNum);
    echo $numString.PHP_EOL;
}
