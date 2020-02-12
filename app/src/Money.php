<?php

namespace src;

/**
 * Class Money
 * @package src
 */
class Money implements Expression
{
    /**
     * @var int
     */
    public int $amount = 0;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function currency() : string
    {
        return $this->currency;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money) : bool
    {
        return $this->amount === $money->amount && $this->currency === $money->currency;
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount) : Money
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount) : Money
    {
        return new Money($amount, 'CHF');
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier) : Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Money $added
     * @return Expression
     */
    public function plus(Money $added) : Expression
    {
        return new Sum($this, $added);
    }

    /**
     * @inheritDoc
     */
    public function reduce(string $to) : Money
    {
        return $this;
    }
}