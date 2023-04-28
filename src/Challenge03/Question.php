<?php

namespace Logotel\ChallengeMidDev\Challenge03;

class Question
{

    protected $answer;

    public function __construct(AnswerInterface $answer)
    {
        $this->answer = $answer;
    }

    public function getResult()
    {
        return $this->answer->get()->the()->answer();
    }
}