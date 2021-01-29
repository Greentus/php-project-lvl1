<?php

namespace Brain\Games\Progression;

use function Brain\Engine\game;

function getProgression($start, $step)
{
    $res = [];
    for ($i = 0; $i < 10; $i++) {
        $res[] = $start + $step * $i;
    }
    return $res;
}

function progression()
{
    $expressions = [];
    for ($i = 1; $i <= 3; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 10);
        $num3 = rand(0, 9);
        $progr = getProgression($num1, $num2);
        $res = $progr[$num3];
        $progr[$num3] = '..';
        $expressions[] = [implode(' ', $progr), $res];
    }
    game('What number is missing in the progression?', $expressions);
}
