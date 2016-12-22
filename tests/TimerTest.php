<?php

namespace Tests\Https\Helpers;

use LucasRuroken\SimplePhpTimer\Timer;
use PHPUnit\Framework\TestCase;

class TimerHelperTest extends TestCase
{
    public function test_today()
    {
        $this->assertEquals(date('Y-m-d H:i:s'), (new Timer())->today()->get());
    }

    public function test_seconds()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 second")), (new Timer())->secondsAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 second")), (new Timer())->seconds(4)->get());
    }

    public function test_minutes()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 minute")), (new Timer())->minutesAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 minute")), (new Timer())->minutes(4)->get());
    }

    public function test_hours()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 hour")), (new Timer())->hoursAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 hour")), (new Timer())->hours(4)->get());
    }

    public function test_days()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 day")), (new Timer())->daysAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 day")), (new Timer())->days(4)->get());
    }

    public function test_weeks()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 week")), (new Timer())->weeksAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 week")), (new Timer())->weeks(4)->get());
    }

    public function test_months()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-3 month")), (new Timer())->monthsAgo(3)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("4 month")), (new Timer())->months(4)->get());
    }

    public function test_years()
    {
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-1 year")), (new Timer())->yearsAgo(1)->get());
        $this->assertEquals(date('Y-m-d H:i:s', strtotime("-1 year +1 day")), (new Timer())->yearsAgo(1)->days(1)->get());
    }

    public function test_concatenate()
    {
        $this->assertEquals
        (
            date('Y-m-d H:i:s', strtotime("-1 second +1 minute +3 hour -5 day -7 week +1 month -5 year")),
            (new Timer())->secondsAgo()->minutes()->hours(3)->daysAgo(5)->weeksAgo(7)->months()->yearsAgo(5)
        );
    }
}