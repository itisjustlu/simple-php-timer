<?php

namespace LucasRuroken\SimplePhpTimer;

class Timer
{
    const NEGATIVE = '-';
    const POSITIVE = '+';

    private $seconds;
    private $secondSymbol;
    private $minutes;
    private $minuteSymbol;
    private $hours;
    private $hourSymbol;
    private $days;
    private $daySymbol;
    private $weeks;
    private $weekSymbol;
    private $months;
    private $monthSymbol;
    private $years;
    private $yearSymbol;
    private $format;

    /**
     * Timer constructor.
     */
    public function __construct()
    {
        $this->format = 'Y-m-d H:i:s';
    }

    /**
     * @return $this
     */
    public function today()
    {
        return $this;
    }

    /**
     * @param int $seconds
     * @return $this
     */
    public function secondsAgo($seconds = 1)
    {
        $this->secondSymbol = self::NEGATIVE;
        $this->seconds = $seconds;

        return $this;
    }

    /**
     * @param int $seconds
     * @return $this
     */
    public function seconds($seconds = 1)
    {
        $this->secondSymbol = self::POSITIVE;
        $this->seconds = $seconds;

        return $this;
    }

    /**
     * @param int $minutes
     * @return $this
     */
    public function minutesAgo($minutes = 1)
    {
        $this->minuteSymbol = self::NEGATIVE;
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * @param int $minutes
     * @return $this
     */
    public function minutes($minutes = 1)
    {
        $this->minuteSymbol = self::POSITIVE;
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * @param int $hours
     * @return $this
     */
    public function hoursAgo($hours = 1)
    {
        $this->hourSymbol = self::NEGATIVE;
        $this->hours = $hours;

        return $this;
    }

    /**
     * @param int $hours
     * @return $this
     */
    public function hours($hours = 1)
    {
        $this->hourSymbol = self::POSITIVE;
        $this->hours = $hours;

        return $this;
    }

    /**
     * @param int $days
     * @return $this
     */
    public function daysAgo($days = 1)
    {
        $this->daySymbol = self::NEGATIVE;
        $this->days = $days;

        return $this;
    }

    /**
     * @param int $days
     * @return $this
     */
    public function days($days = 1)
    {
        $this->daySymbol = self::POSITIVE;
        $this->days = $days;

        return $this;
    }

    /**
     * @param int $weeks
     * @return $this
     */
    public function weeksAgo($weeks = 1)
    {
        $this->weekSymbol = self::NEGATIVE;
        $this->weeks = $weeks;

        return $this;
    }

    /**
     * @param int $weeks
     * @return $this
     */
    public function weeks($weeks = 1)
    {
        $this->weekSymbol = self::POSITIVE;
        $this->weeks = $weeks;

        return $this;
    }

    /**
     * @param int $months
     * @return $this
     */
    public function monthsAgo($months = 1)
    {
        $this->monthSymbol = self::NEGATIVE;
        $this->months = $months;

        return $this;
    }

    /**
     * @param int $months
     * @return $this
     */
    public function months($months = 1)
    {
        $this->monthSymbol = self::POSITIVE;
        $this->months = $months;

        return $this;
    }

    /**
     * @param int $years
     * @return $this
     */
    public function yearsAgo($years = 1)
    {
        $this->yearSymbol = self::NEGATIVE;
        $this->years = $years;

        return $this;
    }

    /**
     * @param int $years
     * @return $this
     */
    public function years($years = 1)
    {
        $this->yearSymbol = self::POSITIVE;
        $this->years = $years;

        return $this;
    }

    /**
     * @param $format
     * @return $this
     */
    public function format($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return string
     */
    public function get()
    {
        $concatenate = [];
        if($this->seconds)
        {
            $concatenate[] = $this->secondSymbol . $this->seconds . ' second';
        }
        if($this->minutes)
        {
            $concatenate[] = $this->minuteSymbol . $this->minutes . ' minute';
        }
        if($this->hours)
        {
            $concatenate[] = $this->hourSymbol . $this->hours . ' hour';
        }
        if($this->days)
        {
            $concatenate[] = $this->daySymbol . $this->days . ' day';
        }
        if($this->weeks)
        {
            $concatenate[] = $this->weekSymbol . $this->weeks . ' week';
        }
        if($this->months)
        {
            $concatenate[] = $this->monthSymbol . $this->months . ' month';
        }
        if($this->years)
        {
            $concatenate[] = $this->yearSymbol . $this->years . ' year';
        }
        if($concatenate)
        {
            $concatenate = implode(' ', $concatenate);
            return date($this->format, strtotime($concatenate));
        }

        return date($this->format);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get();
    }
}