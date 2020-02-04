<?php

namespace src;

/**
 * Class Franc
 * @package src
 */
class Franc extends Money
{
    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier) : Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}