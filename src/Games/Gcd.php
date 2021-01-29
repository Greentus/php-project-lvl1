<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\game;
use function Brain\Engine\getGcd;

const MAX_NUMBER = 50;

function gcd(): void
{
    $expressions = [];
    for ($i = 1; $i <= \Brain\Engine\MAX_STEPS; $i++) {
        $num1 = rand(1, MAX_NUMBER);
        $num2 = rand(1, MAX_NUMBER);
        $expressions[] = ["{$num1} {$num2}", getGcd($num1, $num2)];
    }
    game('Find the greatest common divisor of given numbers.', $expressions);
}
