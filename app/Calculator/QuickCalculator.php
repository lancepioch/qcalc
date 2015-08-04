<?php

namespace App\Calculator;

class QuickCalculator implements CalculatorInterface
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function add($x, $y = false)
    {
        if ($y !== false) {
            $this->result = $x + $y;

            return $this;
        }

        $this->result += $x;

        return $this;
    }

    public function subtract($x, $y = false)
    {
        if ($y !== false) {
            $this->result = $x - $y;

            return $this;
        }

        $this->result -= $x;

        return $this;
    }

    public function multiply($x, $y = false)
    {
        if ($y !== false) {
            $this->result = $x * $y;

            return $this;
        }

        $this->result *= $x;

        return $this;
    }

    public function divide($x, $y = false)
    {
        if ($y !== false) {
            $this->result = $x / $y;

            return $this;
        }

        $this->result /= $x;

        return $this;
    }
}
