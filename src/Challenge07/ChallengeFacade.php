<?php

namespace Logotel\ChallengeMidDev\Challenge07;

final class ChallengeFacade
{

    /**
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments) : mixed
    {
        $class_name = "\\Logotel\\ChallengeMidDev\\Challenge07\\" . ucfirst($name) . "Manager";
        
        if(!class_exists($class_name)){
            return null;
        }

        return (new $class_name)->handle(...$arguments);
    }
}