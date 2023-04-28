<?php

namespace Logotel\ChallengeMidDev\Challenge06;

use stdClass;

class MediaPlayer
{

    protected $types = [];

    public function addMedia($type)
    {
        $this->types[] = $type;
    }

    public function play($type)
    {
        // get the correct exeutor and execute it

        $executor = new stdClass; // replace here with some cool code 🚀

        return $executor();
    }

}