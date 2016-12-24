<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Dayable
{
    public $days;
    public $daySymbol;

    /**
     * @param int $days
     * @return $this
     */
    public function daysAgo($days = 1)
    {
        $this->daySymbol = '-';
        $this->days = $days;

        return $this;
    }

    /**
     * @param int $days
     * @return $this
     */
    public function days($days = 1)
    {
        $this->daySymbol = '+';
        $this->days = $days;

        return $this;
    }

    /**
     * @return $this
     */
    public function today()
    {
        return $this;
    }
}