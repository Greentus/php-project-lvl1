<?php

namespace Brain\Games\Prime;

use function Brain\Engine\game;
use function Brain\Engine\isPrime;

const MAX_NUMBER = 100;

function prime(): void
{
    $expressions = [];
    for ($i = 1; $i <= \Brain\Engine\MAX_STEPS; $i++) {
        $num = rand(1, MAX_NUMBER);
        $expressions[] = [$num, isPrime($num) ? 'yes' : 'no'];
    }
    game('Answer "yes" if given number is prime. Otherwise answer "no".', $expressions);
}
