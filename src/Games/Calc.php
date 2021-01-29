<?php

namespace Brain\Games\Calc;

use function Brain\Engine\game;

const MAX_NUMBER = 25;

function calc(): void
{
    $opertions = ['+','-','*'];
    $expressions = [];
    for ($i = 1; $i <= \Brain\Engine\MAX_STEPS; $i++) {
        $num1 = rand(1, MAX_NUMBER);
        $num2 = rand(1, MAX_NUMBER);
        $op = rand(0, count($opertions) - 1);
        $expr = $num1 . ' ' . $opertions[$op] . ' ' . $num2;
        $sum = eval("return {$expr};");
        $expressions[] = [$expr,$sum];
    }
    game('What is the result of the expression?', $expressions);
}
