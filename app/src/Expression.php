<?php

namespace src;

/**
 * Interface Expression
 * @package src
 */
interface Expression
{
    /**
     * @param Bank $bank
     * @param string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to) : Money;
}