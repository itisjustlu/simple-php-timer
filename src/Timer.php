<?php

namespace LucasRuroken\SimplePhpTimer;

use LucasRuroken\SimplePhpTimer\Concerns\Dayable;
use LucasRuroken\SimplePhpTimer\Concerns\Hourable;
use LucasRuroken\SimplePhpTimer\Concerns\Minutable;
use LucasRuroken\SimplePhpTimer\Concerns\Monthable;
use LucasRuroken\SimplePhpTimer\Concerns\Secondable;
use LucasRuroken\SimplePhpTimer\Concerns\Weekable;
use LucasRuroken\SimplePhpTimer\Concerns\Yearable;

class Timer
{
    use Secondable, Minutable, Hourable, Dayable, Weekable, Monthable, Yearable;

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
    public static function create()
    {
        return new Timer();
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