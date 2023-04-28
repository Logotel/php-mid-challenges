<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge04;

use Logotel\ChallengeMidDev\Challenge04\IceCream;
use PHPUnit\Framework\TestCase;

class Challenge04Test extends TestCase
{
    public function test_ice_cream_can_be_created(): void
    {
        $icecream = new IceCream;

        $icecream->addTaste("cream")->addTaste("strawberry")->addTaste("chocolate");

        $this->assertEquals($icecream->tastesCount(), 3);
        $this->assertEquals($icecream->price(), 7);
    }

    public function test_ice_cream_can_be_created_with_multiple_tastes(): void
    {
        $icecream = new IceCream;

        $icecream->addTaste([
            "lemon",
            "chocolate",
            "mint",
            "orange"
        ]);

        $this->assertEquals($icecream->tastesCount(), 4);
        $this->assertEquals($icecream->price(), 9);
    }

    public function test_ice_cream_can_be_created_skipping_the_same_taste(): void
    {
        $icecream = new IceCream;

        $icecream->addTaste([
            "lemon",
            "lemon",
            "mint",
            "orange"
        ]);

        $this->assertEquals($icecream->tastesCount(), 3);
        $this->assertEquals($icecream->price(), 7);
    }

    public function test_ice_cream_will_be_empty_correctly(): void
    {
        $icecream = new IceCream;

        $icecream->addTaste([
            "lemon",
            "lemon",
            "mint",
            "orange"
        ]);

        $icecream->empty();

        $this->assertEquals($icecream->tastesCount(), 0);
        $this->assertEquals($icecream->price(), 0);
    }

    /**
     * @dataProvider couponProvider
     */
    public function test_ice_cream_will_handle_coupon_correctly(array $tastes, int $expected): void
    {
        $icecream = new IceCream;

        $icecream->addTaste($tastes);

        $this->assertEquals($icecream->getCoupon(), $expected);
    }

    public static function couponProvider(){
        return [
            "no coupon" => [
                "tastes" => ["1", "2", "3"],
                "expected" => 0
            ],
            "one coupon" => [
                "tastes" => ["1", "2", "3", "4", "5"],
                "expected" => 1
            ],
            "two coupon" => [
                "tastes" => ["1", "2", "3", "4", "5", "6"],
                "expected" => 2
            ],
        ];
    }
}