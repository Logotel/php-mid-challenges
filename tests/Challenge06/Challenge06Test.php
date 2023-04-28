<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge06;

use Logotel\ChallengeMidDev\Challenge06\MediaPlayer;
use PHPUnit\Framework\TestCase;

class Challenge06Test extends TestCase
{

    /**
     * @dataProvider mediaProvider
     */
    public function test_can_add_songs_correctly(array $types, string $running, string $expected, bool $exception)
    {
        $media_player = new MediaPlayer();

        foreach($types as $type)
        {
            $media_player->addMedia($type);
        }

        if($exception){
            $this->expectException("\\Logotel\\ChallengeMidDev\\Challenge06\\ExecutorNotFoundException");
        }

        $result = $media_player->play($running);

        if(! $exception)
        {
            $this->assertEquals($expected, $result);
        }  

    }

    public static function mediaProvider()
    {
        return [
            "with multiple" => [
                "types" => ["mp3", "mp4"],
                "running" => "mp3",
                "expected" => "mp3 playing",
                "exception" => false
            ],
            "with single" => [
                "types" => ["mp3"],
                "running" => "mp3",
                "expected" => "mp3 playing",
                "exception" => false
            ],
            "with mp4" => [
                "types" => ["mp4", "avi"],
                "running" => "mp4",
                "expected" => "mp4 playing, and is a video",
                "exception" => false
            ],
            "with invalid type" => [
                "types" => ["mp3", "avi"],
                "running" => "tiff",
                "expected" => "",
                "exception" => true
            ],
        ];
    }
    
}