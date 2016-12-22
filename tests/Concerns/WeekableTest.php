<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Weekable;
use PHPUnit\Framework\TestCase;

class WeekableTest extends TestCase
{
    public function test_weeksAgo()
    {
        $mock = $this->getMockForTrait(Weekable::class);
        $mock->weeksAgo(3);

        $this->assertEquals(3, $mock->weeks);
        $this->assertEquals('-', $mock->weekSymbol);
    }

    public function test_weeks()
    {
        $mock = $this->getMockForTrait(Weekable::class);
        $mock->weeks(5);

        $this->assertEquals(5, $mock->weeks);
        $this->assertEquals('+', $mock->weekSymbol);
    }
}