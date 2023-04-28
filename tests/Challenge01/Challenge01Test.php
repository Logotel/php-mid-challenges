<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge01;

use Logotel\ChallengeMidDev\Challenge01\Answer;
use Logotel\ChallengeMidDev\Challenge01\Question;
use PHPUnit\Framework\TestCase;

class Challenge01Test extends TestCase
{
    public function test_answers_will_be_displayed_correctly(): void
    {

        $answers = [
            new Answer(1, "42", true),
            new Answer(2, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus sapien ac lectus sagittis viverra. Nullam posuere enim ut neque semper, at egestas libero fringilla. Duis at enim vel lectus aliquet malesuada nec nec lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Vestibulum non magna erat. Nullam tristique quam nec sagittis semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse luctus ultricies mauris, ut pretium tortor fermentum a. Sed risus lacus, mollis pharetra urna sed, gravida pretium turpis", false),
            new Answer(3, "100", false),
            new Answer(3, "666", false),
        ];

        $question = new Question($answers);

        $answers = $question->getAnswers();

        $this->assertCount(4, $answers);

        $this->assertTrue(str_ends_with($answers[1]['description'], "..."));

    }

    public function test_question_can_check_correct_answer(): void
    {

        $answers = [
            new Answer(1, "42", true),
            new Answer(2, "0", false),
            new Answer(3, "100", false),
            new Answer(3, "666", false),
        ];

        $question = new Question($answers);

        $this->assertTrue($question->isCorrectAnswer(new Answer(1, "42", true)));

    }
}