<?php declare(strict_types=1);

class Piglet
{

    public function dice($dice): int
    {
        return rand(1, $dice);

    }
}


$piglet = new Piglet();
$dice = $piglet->dice(10);
$playInput = '';
$firsCycleControl = 0;
//kontolē lai spēle nebeidzas pirms sākās!!
while ($dice <= 1) {
    $dice = $piglet->dice(10);
}
$pointCount = $dice;
echo 'Welcome to Piglets!' . PHP_EOL;
echo 'You rolled a ' . $dice . '!' . PHP_EOL;
while ($playInput !== 'no' && $playInput !== 'n' && $dice !== 1) {
    if ($firsCycleControl !== 0) {
        $playInput = readline('Roll again?');
        $dice = $piglet->dice($dice);


    } else {
        $firsCycleControl++;

    }


    if ($playInput === 'n' || $playInput === 'no') {
        echo "You got {$pointCount} points." . PHP_EOL;
    } elseif ($playInput === 'y' || $playInput === 'yes') {
        $pointCount = $pointCount + $dice;


        if ($dice === 1) {
            echo 'You rolled a 1!' . PHP_EOL . 'You got 0 points' . PHP_EOL;
        } else {
            echo 'You rolled a ' . $dice . '!' . PHP_EOL;

        }


    }


}


