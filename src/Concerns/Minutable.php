<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Minutable
{
    public $minutes;
    public $minuteSymbol;

    /**
     * @param int $minutes
     * @return $this
     */
    public function minutesAgo($minutes = 1)
    {
        $this->minuteSymbol = '-';
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * @param int $minutes
     * @return $this
     */
    public function minutes($minutes = 1)
    {
        $this->minuteSymbol = '+';
        $this->minutes = $minutes;

        return $this;
    }
}