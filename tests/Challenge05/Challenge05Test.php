<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge05;

use Logotel\ChallengeMidDev\Challenge05\Person;
use Logotel\ChallengeMidDev\Challenge05\SwapiClient;
use PHPUnit\Framework\TestCase;

class Challenge05Test extends TestCase
{
    /**
     * @dataProvider swapiDataProvider
     */
    public function test_swapi_are_downloaded(?int $id, ?string $file_name, ?bool $with_exception): void
    {
       
        $client = new SwapiClient;

        $client->getPeople($id);

        if($file_name){
            $this->assertEquals(file_exists(__DIR__ . "/../../src/Challenge05/" . $file_name), true);
        }

        if($with_exception){
            $this->expectException("\\Logotel\\ChallengeMidDev\\Challenge05\\PersonNotFoundException");
        }

    }

    public function swapiDataProvider(){
        return [
            "list" => [
                "id" => null,
                "expected_file" => "list.json",
                "exception" => false
            ],
            "list" => [
                "id" => 1,
                "expected_file" => "1.json",
                "exception" => false
            ],
            "list" => [
                "id" => 99999999999,
                "expected_file" => null,
                "exception" => true
            ]
        ];
    }

    public function test_swapi_planet_is_loaded(?int $id, ?string $file_name, ?bool $with_exception): void
    {
       
        $client = new SwapiClient;

        $planet = $client->for(new Person(5))->getPlanet();

        $this->assertEquals($planet->getName(), "Alderaan");

    }
}