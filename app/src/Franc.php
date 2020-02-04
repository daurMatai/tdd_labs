<?php

namespace src;

/**
 * Class Franc
 * @package src
 */
class Franc
{
    /**
     * @var int
     */
    private int $amount = 0;

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
     * @return $this
     */
    public function times(int $multiplier) : self
    {
        return new self($this->amount * $multiplier);
    }

    /**
     * @param Franc $franc
     * @return bool
     */
    public function equals(self $franc) : bool
    {
        return $this->amount === $franc->amount;
    }
}