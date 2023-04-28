<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge02;

use Logotel\ChallengeMidDev\Challenge02\Apple;
use Logotel\ChallengeMidDev\Challenge02\Banana;
use Logotel\ChallengeMidDev\Challenge02\Kiwi;
use PHPUnit\Framework\TestCase;

class Challenge02Test extends TestCase
{
    public function test_classes_are_executed_correctly(): void
    {

       $apple = new Apple;
       $banana = new Banana;
       $kiwi = new Kiwi;

       $this->assertEquals($apple->theAppleMethod(), "I am an Apple");
       $this->assertEquals($banana->theBananaMethod(), "I am a Banana. And i am yellow");
       $this->assertEquals($kiwi->theKiwiMethod(), "I am a Kiwi and i am an allergene. I am weird");

       $this->assertEquals($apple->getName(), "Apple");
       $this->assertEquals($banana->getName(), "Banana");
       $this->assertEquals($kiwi->getName(), "Kiwi");

       $this->assertFalse($apple->isAnAllergene());
       $this->assertFalse($banana->isAnAllergene());
       $this->assertTrue($kiwi->isAnAllergene());
    }
}