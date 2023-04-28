<?php

namespace Logotel\ChallengeMidDev\Challenge01;

class Answer{

    public $id;
    public $description;
    public $correct;

    public function __construct($id, $description, $correct)
    {
        $this->id = $id;
        $this->description = $description;
        $this->correct = $correct;
    }

}