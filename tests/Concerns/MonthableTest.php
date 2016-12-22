<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Monthable;
use PHPUnit\Framework\TestCase;

class MonthableTest extends TestCase
{
    public function test_monthsAgo()
    {
        $mock = $this->getMockForTrait(Monthable::class);
        $mock->monthsAgo(3);

        $this->assertEquals(3, $mock->months);
        $this->assertEquals('-', $mock->monthSymbol);
    }

    public function test_months()
    {
        $mock = $this->getMockForTrait(Monthable::class);
        $mock->months(5);

        $this->assertEquals(5, $mock->months);
        $this->assertEquals('+', $mock->monthSymbol);
    }
}