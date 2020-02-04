<?php

namespace src;

/**
 * Class Franc
 * @package src
 */
class Franc extends Money
{
    /**
     * Franc constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier) : Money
    {
        return new self($this->amount * $multiplier);
    }
}