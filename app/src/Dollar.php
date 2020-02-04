<?php

namespace src;

/**
 * Class Dollar
 * @package src
 */
class Dollar extends Money
{
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


}