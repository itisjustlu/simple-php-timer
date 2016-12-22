<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Weekable
{
    public $weeks;
    public $weekSymbol;

    /**
     * @param int $weeks
     * @return $this
     */
    public function weeksAgo($weeks = 1)
    {
        $this->weekSymbol = '-';
        $this->weeks = $weeks;

        return $this;
    }

    /**
     * @param int $weeks
     * @return $this
     */
    public function weeks($weeks = 1)
    {
        $this->weekSymbol = '+';
        $this->weeks = $weeks;

        return $this;
    }
}