<?php

namespace Brain\Games\Prime;

use function Brain\Engine\game;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $expressions = [];
    for ($i = 1; $i <= 3; $i++) {
        $num = rand(1, 99);
        $expressions[] = [$num, isPrime($num) ? 'yes' : 'no'];
    }
    game('Answer "yes" if given number is prime. Otherwise answer "no".', $expressions);
}
