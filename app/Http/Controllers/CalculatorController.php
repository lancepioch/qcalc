<?php

namespace App\Http\Controllers;

use App\Calculator\QuickCalculator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
	public function index()
	{
		return view('calculator.index');
	}

	public function calculate(Request $request)
	{
		$calculator = new QuickCalculator();

		$augend = $request->get('augend');
		$addend = $request->get('addend');
		$minuend = $request->get('minuend');
		$subtrahend = $request->get('subtrahend');
		$multiplicand = $request->get('multiplicand');
		$multiplier = $request->get('multiplier');
		$dividend = $request->get('dividend');
		$divisor = $request->get('divisor');

		$sum = $calculator->add($augend, $addend)->getResult();
		$difference = $calculator->subtract($minuend, $subtrahend)->getResult();
		$product = $calculator->multiply($multiplicand, $multiplier)->getResult();
		$quotient = $calculator->divide($dividend, $divisor)->getResult();

		$factors = compact([ 'augend', 'addend', 'minuend', 'subtrahend', 'multiplicand', 'multiplier', 'dividend', 'divisor' ]);
		$results = ['sum' => $sum, 'difference' => $difference, 'product' => $product, 'quotient' => $quotient] + $factors;
		return view('calculator.index', $results);
	}
}
