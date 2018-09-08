<?php

// Miejsce na wasze funkcje
function sumOfOddNumbers(float ...$numbers): int
{
    $oddNumbers = array_filter($numbers, function($item) {
        return $item % 2 == 1;
    });

    return array_sum($oddNumbers);
}