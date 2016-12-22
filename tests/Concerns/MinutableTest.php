<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Minutable;
use PHPUnit\Framework\TestCase;

class MinutableTest extends TestCase
{
    public function test_minutesAgo()
    {
        $mock = $this->getMockForTrait(Minutable::class);
        $mock->minutesAgo(3);

        $this->assertEquals(3, $mock->minutes);
        $this->assertEquals('-', $mock->minuteSymbol);
    }

    public function test_minutes()
    {
        $mock = $this->getMockForTrait(Minutable::class);
        $mock->minutes(5);

        $this->assertEquals(5, $mock->minutes);
        $this->assertEquals('+', $mock->minuteSymbol);
    }
}