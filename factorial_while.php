<?php

$n = 7;

$counter = 1;
$result = 1;

while ($counter <= $n) {
    $result = $result*$counter;
    $counter = ($counter + 1);
}

print_r($result);