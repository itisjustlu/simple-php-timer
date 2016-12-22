<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Dayable;
use PHPUnit\Framework\TestCase;

class DayableTest extends TestCase
{
    public function test_daysAgo()
    {
        $mock = $this->getMockForTrait(Dayable::class);
        $mock->daysAgo(3);

        $this->assertEquals(3, $mock->days);
        $this->assertEquals('-', $mock->daySymbol);
    }

    public function test_days()
    {
        $mock = $this->getMockForTrait(Dayable::class);
        $mock->days(5);

        $this->assertEquals(5, $mock->days);
        $this->assertEquals('+', $mock->daySymbol);
    }
}