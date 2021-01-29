<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

const MAX_STEPS = 3;

function getGcd($a, $b)
{
    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}

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

function getProgression($start, $step, $count)
{
    $res = [];
    for ($i = 0; $i < $count; $i++) {
        $res[] = $start + $step * $i;
    }
    return $res;
}

function greeting($task = "")
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    if (!empty($task)) {
        line($task);
    }
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
