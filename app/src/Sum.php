<?php

namespace src;

/**
 * Class Sum
 * @package src
 */
class Sum implements Expression
{
    /**
     * @var Money
     */
    public Money $augend;

    /**
     * @var Money
     */
    public Money $addend;

    /**
     * Sum constructor.
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @inheritDoc
     */
    public function reduce(string $to) : Money
    {
        $amount = $this->augend->amount + $this->addend->amount;

        return new Money($amount, $to);
    }
}