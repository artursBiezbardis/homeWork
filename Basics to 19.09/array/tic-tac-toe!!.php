<?php declare(strict_types=1);


function winner($charArr, $player): bool
{
    $arrAll = [
        [$charArr[0][0], $charArr[0][1], $charArr[0][2]],
        [$charArr[1][0], $charArr[1][1], $charArr[1][2]],
        [$charArr[2][0], $charArr[2][1], $charArr[2][2]],
        [$charArr[0][0], $charArr[1][0], $charArr[2][0]],
        [$charArr[1][0], $charArr[1][1], $charArr[1][2]],
        [$charArr[2][0], $charArr[2][1], $charArr[2][2]],
        [$charArr[0][0], $charArr[1][1], $charArr[2][2]],
        [$charArr[2][0], $charArr[1][1], $charArr[0][2]]
    ];
    //[$arr1, $arr2, $arr3, $arr4, $arr5, $arr6, $arr7, $arr8];

    //echo implode('', $arr2) . PHP_EOL;
    foreach ($arrAll as $arr) {
        //echo implode('', $arr) .'1'.PHP_EOL;
        $arrToString = (string)implode('', $arr);
        $winComb = (string)$player . $player . $player;

        if ($arrToString == $winComb) {
            return true;
        }

    }
    return false;

}

function tieGame($charArr)
{
    $charArrString = implode($charArr[0]) . implode($charArr[1]) . implode($charArr[2]);
    $checkTie = strpos($charArrString, ' ');
    if ($checkTie !== false) {
        return false;
    } else {
        return true;
    }
}


function displayBoard($charArr)
{
    echo " {$charArr[0][0]} | {$charArr[0][1]} | {$charArr[0][2]} \n";
    echo "---+---+---\n";
    echo " {$charArr[1][0]} | {$charArr[1][1]} | {$charArr[1][2]} \n";
    echo "---+---+---\n";
    echo " {$charArr[2][0]} | {$charArr[2][1]} | {$charArr[2][2]} \n";
}


$charArr =
    [
        [' ', ' ', ' '],
        [' ', ' ', ' '],
        [' ', ' ', ' ']
    ];

$gameXWin = false;
$gameOWin = false;
$gameIsTie = false;

$playXOrO = 1;
$player = 'X';
$updateArr = 0;
$checkLocation = [];

while (!$gameXWin && !$gameOWin && !$gameIsTie) {
    //echo winner($charArr, $player) . PHP_EOL;
    $gameIsTie = tieGame($charArr);

    if ($gameIsTie) {
        displayBoard($charArr);
        echo 'Game is Tie.' . PHP_EOL;
    } elseif
    ($player === 'X') {
        displayBoard($charArr);
        $inputX = readline("'X', choose your location (row, column): ");

        $rowIndex = substr($inputX, 0, 1);
        $colIndex = substr($inputX, 1, 1);

        if ($charArr[$rowIndex][$colIndex] == 'X'
            || $charArr[$rowIndex][$colIndex] == 'O') {
            echo 'This location is Filled, chose different!' . PHP_EOL;
        } else {
            $charArr[$rowIndex][$colIndex] = 'X';
            $gameXWin = winner($charArr, $player);
            if ((bool)$gameXWin) {
                displayBoard($charArr);
                echo "'{$player}' you are the winner!!" . PHP_EOL;
            }
            $player = 'O';
        }

    } elseif ($player === 'O') {
        displayBoard($charArr);
        $inputO = readline("'O', choose your location (row, column): ");
        $rowIndex = substr($inputO, 0, 1);
        $colIndex = substr($inputO, 1, 1);

        if ($charArr[$rowIndex][$colIndex] === 'X'
            || $charArr[$rowIndex][$colIndex] === 'O') {
            echo 'This location is Filled, chose different!' . PHP_EOL;
        } else {
            $charArr[$rowIndex][$colIndex] = 'O';
            $gameOWin = winner($charArr, $player);
            if ($gameOWin) {
                displayBoard($charArr);
                echo "'{$player}' you are the winner!!" . PHP_EOL;
            }
            $player = 'X';
        }

    }


}


