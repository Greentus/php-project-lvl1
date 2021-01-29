<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\game;

function getGcd($a, $b)
{
    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}

function gcd()
{
    $expressions = [];
    for ($i = 1; $i <= 3; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $expressions[] = ["{$num1} {$num2}", getGcd($num1, $num2)];
    }
    game('Find the greatest common divisor of given numbers.', $expressions);
}
