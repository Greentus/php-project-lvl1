<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

const MAX_STEPS = 3;

function getGcd(int $a, int $b): int
{
    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}

function isPrime(int $num): bool
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

function getProgression(int $start, int $step, int $count): array
{
    $res = [];
    for ($i = 0; $i < $count; $i++) {
        $res[] = $start + $step * $i;
    }
    return $res;
}

function greeting(string $task = ""): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    if (!empty($task)) {
        line($task);
    }
    return $name;
}

function question(string $text): string
{
    line('Question: %s', $text);
    return prompt('Your answer');
}

function check(string $answer, string $correct): string
{
    if ($answer == $correct) {
        line('Correct!');
        return true;
    } else {
        line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $answer, $correct);
        return false;
    }
}

function game(string $taskName, array $tasks): bool
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
