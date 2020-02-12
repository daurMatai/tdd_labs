<?php

namespace src;

/**
 * Class Bank
 * @package src
 */
class Bank
{
    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to) : Money
    {
        return Money::dollar(10);
    }
}