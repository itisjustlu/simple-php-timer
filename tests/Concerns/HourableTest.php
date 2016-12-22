<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Hourable;
use PHPUnit\Framework\TestCase;

class HourableTest extends TestCase
{
    public function test_secondsAgo()
    {
        $mock = $this->getMockForTrait(Hourable::class);
        $mock->hoursAgo(3);

        $this->assertEquals(3, $mock->hours);
        $this->assertEquals('-', $mock->hourSymbol);
    }

    public function test_hours()
    {
        $mock = $this->getMockForTrait(Hourable::class);
        $mock->hours(5);

        $this->assertEquals(5, $mock->hours);
        $this->assertEquals('+', $mock->hourSymbol);
    }
}