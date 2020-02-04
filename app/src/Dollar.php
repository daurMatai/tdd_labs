<?php

namespace src;

/**
 * Class Dollar
 * @package src
 */
class Dollar
{
    /**
     * @var int
     */
    private int $amount = 0;

    /**
     * Dollar constructor.
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
     * @param Dollar $dollar
     * @return bool
     */
    public function equals(self $dollar) : bool
    {
        return $this->amount === $dollar->amount;
    }
}