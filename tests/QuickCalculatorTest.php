<?php

use App\Calculator\QuickCalculator;

class QuickCalculatorTest extends TestCase
{
    /**
     * Test the basic addition.
     */
    public function testBasicAddition()
    {
        $calculator = new QuickCalculator();
        $calculator->add(2, 1);
        $this->assertEquals(3, $calculator->getResult());
    }

    /**
     * Test the basic subtraction.
     */
    public function testBasicSubtraction()
    {
        $calculator = new QuickCalculator();
        $calculator->subtract(2, 1);
        $this->assertEquals(1, $calculator->getResult());
    }

    /**
     * Test the basic multiplication.
     */
    public function testBasicMultiplication()
    {
        $calculator = new QuickCalculator();
        $calculator->multiply(2, 1);
        $this->assertEquals(2, $calculator->getResult());
    }

    /**
     * Test the basic division.
     */
    public function testBasicDivision()
    {
        $calculator = new QuickCalculator();
        $calculator->divide(2, 1);
        $this->assertEquals(2, $calculator->getResult());
    }

    /**
     * Test the division by zero.
     */
    public function testZeroDivision()
    {
        $calculator = new QuickCalculator();
        $calculator->divide(2, 0);
        $this->assertEquals('undefined', $calculator->getResult());
    }

    /**
     * Test the basic continuous arithmetic.
     */
    public function testContinuousArithmetic()
    {
        $calculator = new QuickCalculator();
        $calculator->add(0, 10)->subtract(5)->multiply(4)->divide(2);
        $this->assertEquals(10, $calculator->getResult());
    }
}
