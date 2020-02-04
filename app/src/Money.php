<?php

namespace src;

class Money
{
    /**
     * @var int
     */
    protected int $amount = 0;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(self $money) : bool
    {
        return $this->amount === $money->amount &&  get_class($this) === get_class($money);
    }
}