<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Secondable
{
    public $seconds;
    public $secondSymbol;

    /**
     * @param int $seconds
     * @return $this
     */
    public function secondsAgo($seconds = 1)
    {
        $this->secondSymbol = '-';
        $this->seconds = $seconds;

        return $this;
    }

    /**
     * @param int $seconds
     * @return $this
     */
    public function seconds($seconds = 1)
    {
        $this->secondSymbol = '+';
        $this->seconds = $seconds;

        return $this;
    }
}