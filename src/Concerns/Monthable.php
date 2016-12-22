<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Monthable
{
    public $months;
    public $monthSymbol;

    /**
     * @param int $months
     * @return $this
     */
    public function monthsAgo($months = 1)
    {
        $this->monthSymbol = '-';
        $this->months = $months;

        return $this;
    }

    /**
     * @param int $months
     * @return $this
     */
    public function months($months = 1)
    {
        $this->monthSymbol = '+';
        $this->months = $months;

        return $this;
    }
}