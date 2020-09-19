<?php declare(strict_types=1);
function misses(string $inChar, string $word, string $misses)
{
    if (strpos($word, $inChar) === false) {
        return $misses .= $inChar;
    } else {
        return $misses;
    }
}

function uncoverWord($word, $inChar, $guessWord): string
{
    $stringPos = strpos($word, $inChar);
    if ($guessWord === '') {
        for ($i = 0; $i < (int)strlen($word); $i++) {
            $guessWord .= '_';
        }
        return (string)$guessWord;
    } elseif ($stringPos !== false) {
        return (string)$guessWord = substr_replace($guessWord, $inChar, $stringPos, strlen($inChar));
    } elseif ($stringPos === false) {
        return (string)$guessWord;
    }

}

$wordList = ['gravity', 'matrix', 'body', 'dance'];
$word = (string)$wordList[array_rand($wordList)];
$inChar = ' ';
$guessWord = (string)'';
$guessWord = (string)uncoverWord($word, $inChar, $guessWord);
$missesString = '';
$playQuit = '';
$gamePlayLimit = intval(strlen($word) * 2);
$limitCount = 0;


do {
    while ($word !== (string)$guessWord && $limitCount !== $gamePlayLimit) {
        $limitCount++;
        $missesString = misses($inChar, $word, $missesString);
        echo $limitCount;
        echo $gamePlayLimit;
        echo $word;
        echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
        echo 'Word:    ' . $guessWord . PHP_EOL;
        echo 'Misses:  ' . $missesString . PHP_EOL;
        $inChar = readline('Guess:   ');
        $guessWord = (string)uncoverWord($word, $inChar, $guessWord);
        //$missesString = misses($inChar, $word, $missesString);


    }
    echo 'YOU GOT IT!' . PHP_EOL;
    $quitOrPlay = readline('Play "again" or "quit"?');
    if ($quitOrPlay === 'again') {
        $guessWord = '';
        $missesString = '';
        $word = (string)$wordList[array_rand($wordList)];
        $missesString = misses($inChar, $word, $missesString);
        $guessWord = (string)uncoverWord($word, $inChar, $guessWord);
    }
} while ($quitOrPlay !== 'quit');



