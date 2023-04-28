<?php

namespace Logotel\ChallengeMidDev\Challenge02;

class Kiwi
{
    
    public function getName()
    {
        return "Kiwi";
    }

    public function isAnAllergene()
    {
        return true;
    }

    public function theKiwiMethod()
    {

        $name = $this->getName();
        $allergene = $this->isAnAllergene();

        $string = "I am a " . $name;

        if($allergene)
        {
            $string .= " and i am an allergene";
        }

        $string .= ". I am weird";

        return $string;
    }

}