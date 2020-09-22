<?php declare(strict_types=1);

class AsciiFigure
{


    public function slashString($sideSigne, $lineCountConst, $slashCycleCount)
    {
        $slashString = '';

        $lineCount = $lineCountConst - $slashCycleCount;


        $lengthCount = $lineCount * 4;

        for ($i = 0; $i < $lengthCount; $i++) {

            $slashString = $slashString . $sideSigne;
        }
        return $slashString;
    }

    public function starString($starCycleCount)
    {
        $starString = '';
        $lengthCount = $starCycleCount * 8;
        for ($i = 1; $i < $lengthCount; $i++) {
            $starString = $starString . '*';

        }

        return $starString;
    }


}


$figure = new AsciiFigure();
$lineCountConst = readline('Type number for AsciiFigure size: ');
$sideSigneCycleCount = 0;
$middleFigureCycleCount = 0;

while ($sideSigneCycleCount < $lineCountConst) {

    $sideSigneCycleCount += 1;

    echo $figure->slashString('/', $lineCountConst, $sideSigneCycleCount);
    echo $figure->starString($middleFigureCycleCount);
    echo $figure->slashString('\\', $lineCountConst, $sideSigneCycleCount) . PHP_EOL;

    $middleFigureCycleCount++;
}


