<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge03;

use Logotel\ChallengeMidDev\Challenge03\Answer;
use Logotel\ChallengeMidDev\Challenge03\Question;
use PHPUnit\Framework\TestCase;

class Challenge03Test extends TestCase
{
    public function test_classes_are_executed_correctly(): void
    {
        $answer = new Answer;
        $question = new Question($answer);

        $this->assertEquals($question->getResult(), 42);
    }
}