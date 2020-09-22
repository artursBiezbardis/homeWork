<?php

for ($i = 1; $i <= 110; $i++) {
    if ($i % 7 === 0 && $i % 3 === 0) {
        echo 'CozaWoza ';
    } elseif ($i % 3 === 0 && $i % 5 === 0) {
        echo 'CozaLoza ';
    } elseif ($i % 3 === 0) {
        echo 'Coza ';
    } elseif ($i % 5 === 0) {
        echo 'Loza ';
    } elseif ($i % 7 === 0) {
        echo 'Woza ';
    } else {
        echo $i . ' ';
    }
}