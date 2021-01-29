<?php

namespace Brain\Games\Even;

use function Brain\Engine\game;

const MAX_NUMBER = 100;

function even(): void
{
    $expressions = [];
    for ($i = 1; $i <= \Brain\Engine\MAX_STEPS; $i++) {
        $num = rand(1, MAX_NUMBER);
        $expressions[] = [$num, ($num % 2 == 0) ? 'yes' : 'no'];
    }
    game('Answer "yes" if the number is even, otherwise answer "no".', $expressions);
}
