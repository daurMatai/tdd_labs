<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\Bank;
use src\Money;

class MultiplicationTest extends TestCase
{

    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testSimpleAddition()
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');

//        $sum = Money::dollar(5)->plus(Money::dollar(5));
        $this->assertEquals(Money::dollar(10), $reduced);
    }
}