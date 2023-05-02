<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge07;

use Logotel\ChallengeMidDev\Challenge07\ChallengeFacade;
use Logotel\ChallengeMidDev\Challenge07\MediaPlayer;
use PHPUnit\Framework\TestCase;

class Challenge07Test extends TestCase
{

    /**
     * @dataProvider dataProvider
     */
    public function test_class_will_handle_correctly(string $name, array $arguments, int|string|array|null $expected)
    {
        
        $result = ChallengeFacade::$name(...$arguments);

        $this->assertEquals($expected, $result);

    }

    public static function dataProvider()
    {
        return [
            "correct" => [
                "name" => "sum",
                "arguments" => [100, 200],
                "expected" => 300
            ],
            "not found" => [
                "types" => "aclassthatnotexists",
                "arguments" => ["test", "class"],
                "expected" => null
            ],
            "correct 2" => [
                "types" => "concat",
                "arguments" => ["test", "class"],
                "expected" => "this is a test class"
            ],
            "correct 3" => [
                "types" => "sort",
                "arguments" => [[9, 5, 4 ,7, 1, 3, 2, 6, 8]],
                "expected" => [1, 2, 3, 4, 5, 6, 7, 8, 9]
            ],
        ];
    }
    
}