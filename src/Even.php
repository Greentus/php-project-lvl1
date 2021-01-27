<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function even() {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i=1; $i<=3; $i++) {
        $num=rand(1,99);
        line('Question: %d',$num);
        $res = prompt('Your answer');
        if ($num % 2 == 0) {
	    if ($res == 'yes') {
		line('Correct!');
	    } else {
		line('\'%s\' is wrong answer ;(. Correct answer was \'yes\'.',$res);
		line('Let\'s try again, %s!', $name);
		break;
	    }
	} else {
	    if ($res == 'yes') {
		line('\'%s\' is wrong answer ;(. Correct answer was \'no\'.',$res);
		line('Let\'s try again, %s!', $name);
		break;
	    } else {
	    line('Correct!');
	    }
	}
    }
}
