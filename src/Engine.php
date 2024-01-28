<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function dialogue(string $name,string $question,string $result)
{
    line("Question: {$question}");
    $answer = prompt('Your answer');

    if ($answer == $result) {
        line('Correct!');
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
        line("Let's try again, {$name}!");
        return false;
    }
}

function check(string $name)
{
    $success = false;

    for ($i = 0; $i < 3; $i++) {
    	// phpcs:disable
        $success = event($name);
        // phpcs:enable
        if ($success == false) {
            break;
        }
    }

    if ($success == true) {
        line("Congratulations, {$name}!");
    }
}
