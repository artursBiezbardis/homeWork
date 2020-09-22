<?php

echo "I'm thinking of a number between 1-100.  Try to guess it." . PHP_EOL;


$randomNumber = rand(1, 100);
$guessInput = (int)readline('>');

if ($randomNumber > $guessInput) {
    echo PHP_EOL . 'Sorry, you are too low.  I was thinking of ' . $randomNumber . '.' . PHP_EOL;
} elseif ($randomNumber < $guessInput) {
    echo PHP_EOL . 'Sorry, you are too high.  I was thinking of ' . $randomNumber . '.' . PHP_EOL;
} else {
    echo PHP_EOL . 'You guessed it!  What are the odds?!?' . PHP_EOL;
}