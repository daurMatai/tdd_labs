<?php

namespace src;

class Money
{
    /**
     * @var int
     */
    protected int $amount = 0;

    /**
     * @var string
     */
    protected string $currency;

//    /**
//     * @param int $multiplier
//     * @return Money
//     */
//    function times(int $multiplier) : Money;

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
    public function equals(self $money) : bool
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
}