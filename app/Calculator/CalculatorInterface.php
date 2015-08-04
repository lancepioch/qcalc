<?php

namespace App\Calculator;

interface CalculatorInterface
{
    /* Get the result */
    public function getResult();

    /* Add two numbers together and store the result */
    public function add($x, $y);

    /* Subtract the second number from the first and store the result */
    public function subtract($x, $y);

    /* Multiply two numbers together and store the result */
    public function multiply($x, $y);

    /* Divide the first number by the second number and store the result */
    public function divide($x, $y);
}
