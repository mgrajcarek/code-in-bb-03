<?php

declare(strict_types=1);

// Miejsce na wasze funkcje
function sumOfOddNumbers(float ...$numbers): int
{
    $oddNumbers = array_filter($numbers, function($item) {
        return $item % 2 == 1;
    });

    return (int) array_sum($oddNumbers);
}