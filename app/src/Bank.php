<?php

namespace src;

/**
 * Class Bank
 * @package src
 */
class Bank
{
    /**
     * @var array
     */
    private array $rates = [];

    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to) : Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * @param string $from
     * @param string $to
     * @return int
     */
    public function rate(string $from, string $to) : int
    {
        return ($from === $to) ? 1 : $this->rates[(string) new Pair($from, $to)];
    }

    /**
     * @param string $from
     * @param string $to
     * @param int $rate
     */
    public function addRate(string $from, string $to, int $rate) : void
    {
        $this->rates[(string) new Pair($from, $to)] = $rate;
    }
}