<?php

$n = 10;

function factorial($n) {
    if ($n == 1) {
        return 1;
    } else {
        return $n*factorial($n - 1);
    }
}

$result = factorial($n);

print_r("Факториал числа {$n} равняется {$result}.");