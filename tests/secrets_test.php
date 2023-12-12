<?php

namespace local_sandbox;

class secrets_test extends \advanced_testcase {

    public function test_woodchuck() {
        $question = 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?';
        $answer = 'A woodchuck would chuck as much wood as a woodchuck could chuck if a woodchuck could chuck wood';

        $this->assertEquals($answer, secrets::get($question));
    }

    public function test_programmers() {
        $question = 'How many programmers does it take to change a light bulb?';
        $answer = 'None. It\'s a hardware problem.';

        $this->assertEquals($answer, secrets::get($question));
    }

}
