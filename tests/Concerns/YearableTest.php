<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Yearable;
use PHPUnit\Framework\TestCase;

class YearableTest extends TestCase
{
    public function test_yearsAgo()
    {
        $mock = $this->getMockForTrait(Yearable::class);
        $mock->yearsAgo(3);

        $this->assertEquals(3, $mock->years);
        $this->assertEquals('-', $mock->yearSymbol);
    }

    public function test_years()
    {
        $mock = $this->getMockForTrait(Yearable::class);
        $mock->years(5);

        $this->assertEquals(5, $mock->years);
        $this->assertEquals('+', $mock->yearSymbol);
    }
}