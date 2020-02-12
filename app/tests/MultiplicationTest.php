<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\Bank;
use src\Money;
use src\Sum;

class MultiplicationTest extends TestCase
{

    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

//    public function testSimpleAddition()
//    {
//        $five = Money::dollar(5);
//        $sum = $five->plus($five);
//        $bank = new Bank();
//        $reduced = $bank->reduce($sum, 'USD');
//
////        $sum = Money::dollar(5)->plus(Money::dollar(5));
//        $this->assertEquals(Money::dollar(10), $reduced);
//    }

//    public function testPlusReturnsSum()
//    {
//        $five = Money::dollar(5);
//        $result = $five->plus($five);
//        $sum = $result;
//
//        $this->assertEquals($five, $sum->augend);
//        $this->assertEquals($five, $sum->addend);
//    }

//    public function testReduceSum()
//    {
//        $sum = new Sum(Money::dollar(3), Money::dollar(4));
//        $bank = new Bank();
//        $result = $bank->reduce($sum, 'USD');
//
//        $this->assertEquals(Money::dollar(7), $result);
//    }

//    public function testReduceMoney()
//    {
//        $bank = new Bank();
//        $result = $bank->reduce(Money::dollar(1), 'USD');
//        $this->assertEquals(Money::dollar(1), $result);
//    }

    public function testReduceMoneyDifferentCurrency()
    {
        $bank = new Bank();
        $bank->addRate('CHF', 'USD', 2);
        $result = $bank->reduce(Money::franc(2), 'USD');
        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testIdentityRate()
    {
        $this->assertEquals(1, (new Bank())->rate('USD', 'USD'));
    }
}