<?php

namespace Logotel\ChallengeMidDev\Challenge01;

class Question{

    protected $answers;

    public function __construct($ansers)
    {
        $this->answers = $ansers;
    }

    public function getAnswers()
    {

        $ans_list = [];



        foreach($this->answers as $a)
        {
            $ans_list[] = [
                'id' => $a->id,
                'description' => $a->description,
            ];
        }


        foreach($ans_list as $ans)
        {
            if(strlen($ans['description']) > 50){
                
                $ans['description'] = substr($ans['description'], 0, 50) . "...";
            }
            
        }

        return $ans_list;



    }

    public function isCorrectAnswer($answer)
    {
        
        foreach($this->answers as $a)
        {
            if($a->id == $answer->id)
            {
                if($a->correct == $answer->correct)
                {
                    $ret = true;
                }
                else
                {
                    $ret = false;
                }
            }
            else
            {
                $ret = false;
            }
        }

        return $ret;
    }
}