<?php

namespace Brain\Games\Progression;

use function Brain\Engine\game;
use function Brain\Engine\getProgression;

const MAX_NUMBER = 50;
const PROGR_SIZE = 10;


function progression()
{
    $expressions = [];
    for ($i = 1; $i <= \Brain\Engine\MAX_STEPS; $i++) {
        $num1 = rand(1, MAX_NUMBER);
        $num2 = rand(1, PROGR_SIZE);
        $num3 = rand(0, PROGR_SIZE - 1);
        $progr = getProgression($num1, $num2, PROGR_SIZE);
        $res = $progr[$num3];
        $progr[$num3] = '..';
        $expressions[] = [implode(' ', $progr), $res];
    }
    game('What number is missing in the progression?', $expressions);
}
