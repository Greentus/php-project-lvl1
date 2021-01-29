<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function greeting($task)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($task);
    return $name;
}

function question($text)
{
    line('Question: %s', $text);
    return prompt('Your answer');
}

function check($answer, $correct)
{
    if ($answer == $correct) {
        line('Correct!');
        return true;
    } else {
        line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $answer, $correct);
        return false;
    }
}

function game($taskName, $tasks)
{
    $name = greeting($taskName);
    foreach ($tasks as $task) {
        $res = question($task[0]);
        if (!check($res, $task[1])) {
            line('Let\'s try again, %s!', $name);
            return false;
        }
    }
    line('Congratulations, %s!', $name);
    return true;
}

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
