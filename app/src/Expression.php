<?php

namespace src;

/**
 * Interface Expression
 * @package src
 */
interface Expression
{
    /**
     * @param string $to
     * @return Money
     */
    public function reduce(string $to) : Money;
}