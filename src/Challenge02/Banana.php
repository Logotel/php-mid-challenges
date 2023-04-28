<?php

namespace Logotel\ChallengeMidDev\Challenge02;

class Banana
{
    
    public function getName()
    {
        return "Banana";
    }

    public function isAnAllergene()
    {
        return false;
    }

    public function theBananaMethod()
    {

        $name = $this->getName();
        $allergene = $this->isAnAllergene();

        $string = "I am a " . $name;

        if($allergene)
        {
            $string .= " and i am an allergene";
        }

        $string .= ". And i am yellow";

        return $string;
    }

}