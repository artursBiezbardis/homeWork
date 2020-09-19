<?php

function display($typedWord)
{

    echo 'Type your text with phone key pad.' . PHP_EOL;
    echo '==================================' . PHP_EOL;
    echo '        Exit(1) ' . PHP_EOL;
    echo 'ABC(2)  DEF(3)  GHI(4)' . PHP_EOL;
    echo 'JKL(5)  MNO(6)  PQRS(7)' . PHP_EOL;
    echo 'TUV(8)  WXYZ(9) space(0)' . PHP_EOL;
    echo '      backspace(00)' . PHP_EOL;
    echo '==================================' . PHP_EOL;
    echo 'Your typed characters: ' . $typedWord . PHP_EOL;
    echo 'Type character: ';
}


function processWord($typedWord, $typedInput)
{


    while ($typedInput !== '1') {

        display($typedWord);
        $typedInput = readline();

        if ($typedInput === '00') {
            if ($typedWord === '') {
            } else {
                $typedWord = substr($typedWord, 0, -1);
            }

        } elseif ($typedInput === '0') {
            if ($typedWord === '') {
            } else {
                $typedWord .= ' ';
            }

        } else {
            switch ($typedInput) {
                case '2':
                    $typedWord .= 'A';
                    break;
                case '22':
                    $typedWord .= 'B';
                    break;
                case '222':
                    $typedWord .= 'C';
                    break;
                case '3':
                    $typedWord .= 'D';
                    break;
                case '33':
                    $typedWord .= 'E';
                    break;
                case '333':
                    $typedWord .= 'F';
                    break;
                case '4':
                    $typedWord .= 'G';
                    break;
                case '44':
                    $typedWord .= 'H';
                    break;
                case '444':
                    $typedWord .= 'I';
                    break;
                case '5':
                    $typedWord .= 'J';
                    break;
                case '55':
                    $typedWord .= 'K';
                    break;
                case '555':
                    $typedWord .= 'L';
                    break;
                case '6':
                    $typedWord .= 'M';
                    break;
                case '66':
                    $typedWord .= 'N';
                    break;
                case '666':
                    $typedWord .= 'O';
                    break;
                case '7':
                    $typedWord .= 'P';
                    break;
                case '77':
                    $typedWord .= 'Q';
                    break;
                case '777':
                    $typedWord .= 'R';
                    break;
                case '7777':
                    $typedWord .= 'S';
                    break;
                case '8':
                    $typedWord .= 'T';
                    break;
                case '88':
                    $typedWord .= 'U';
                    break;
                case '888':
                    $typedWord .= 'V';
                    break;
                case '9':
                    $typedWord .= 'W';
                    break;
                case '99':
                    $typedWord .= 'X';
                    break;
                case '999':
                    $typedWord .= 'Y';
                    break;
                case '9999':
                    $typedWord .= 'Z';
                    break;
                default:
                    $typedWord;
                    break;
            }
        }

    }
}

$typedInput = '';
$typedWord = '';
processWord($typedWord, $typedInput);


