<?php

namespace Brain\Games\Calc;

use function Brain\Engine\game;

function calc()
{
    $opertions = ['+','-','*'];
    $expressions = [];
    for ($i = 1; $i <= 3; $i++) {
        $num1 = rand(1, 25);
        $num2 = rand(1, 25);
        $op = rand(0, 2);
        $expr = $num1 . $opertions[$op] . $num2;
        eval("\$sum={$expr};");
        $expressions[] = [$expr,$sum];
    }
    game('What is the result of the expression?', $expressions);
}
