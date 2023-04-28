<?php

namespace Logotel\ChallengeMidDev\Challenge02;

class Apple
{
    
    public function getName()
    {
        return "Apple";
    }

    public function isAnAllergene()
    {
        return false;
    }

    public function theAppleMethod()
    {

        $name = $this->getName();
        $allergene = $this->isAnAllergene();

        $string = "I am an " . $name;

        if($allergene)
        {
            $string .= " and i am an allergene";
        }

        return $string;
    }

}