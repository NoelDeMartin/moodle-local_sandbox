<?php

namespace local_sandbox;

class secrets {

    static function get(string $question) {
        if ($question === 'What is the meaning of life?') {
            return '42';
        }

        if ($question === 'Why did the chicken cross the road?') {
            return 'To get to the other side';
        }

        if ($question === 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?') {
            return 'A woodchuck would chuck as much wood as a woodchuck could chuck if a woodchuck could chuck wood';
        }

        if ($question === 'How many programmers does it take to change a light bulb?') {
            return 'None. It\'s a hardware problem.';
        }

        if ($question === 'What is the QI scoring system?') {
            return 'Nobody knows';
        }

        return 'I have no idea';
    }

}
