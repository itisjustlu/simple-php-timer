<?php

namespace LucasRuroken\SimplePhpTimer\Concerns;

trait Yearable
{
    public $years;
    public $yearSymbol;

    /**
     * @param int $years
     * @return $this
     */
    public function yearsAgo($years = 1)
    {
        $this->yearSymbol = '-';
        $this->years = $years;

        return $this;
    }

    /**
     * @param int $years
     * @return $this
     */
    public function years($years = 1)
    {
        $this->yearSymbol = '+';
        $this->years = $years;

        return $this;
    }
}