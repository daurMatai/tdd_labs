<?php

namespace src;

abstract class Money
{
    /**
     * @var int
     */
    protected int $amount = 0;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times(int $multiplier) : Money;

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
        return $this->amount === $money->amount &&  get_class($this) === get_class($money);
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount) : Money
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount) : Money
    {
        return new Franc($amount, 'CHF');
    }
}