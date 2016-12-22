<?php

namespace LucasRuroken\SimplePhpTimer\Tests\Concerns;

use LucasRuroken\SimplePhpTimer\Concerns\Secondable;
use PHPUnit\Framework\TestCase;

class SecondableTest extends TestCase
{
    public function test_secondsAgo()
    {
        $mock = $this->getMockForTrait(Secondable::class);
        $mock->secondsAgo(3);

        $this->assertEquals(3, $mock->seconds);
        $this->assertEquals('-', $mock->secondSymbol);
    }

    public function test_seconds()
    {
        $mock = $this->getMockForTrait(Secondable::class);
        $mock->seconds(5);

        $this->assertEquals(5, $mock->seconds);
        $this->assertEquals('+', $mock->secondSymbol);
    }
}