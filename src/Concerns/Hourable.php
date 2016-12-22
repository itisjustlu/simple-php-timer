<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Hourable
{
    public $hours;
    public $hourSymbol;

    /**
     * @param int $hours
     * @return $this
     */
    public function hoursAgo($hours = 1)
    {
        $this->hourSymbol = '-';
        $this->hours = $hours;

        return $this;
    }

    /**
     * @param int $hours
     * @return $this
     */
    public function hours($hours = 1)
    {
        $this->hourSymbol = '+';
        $this->hours = $hours;

        return $this;
    }
}