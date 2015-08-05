<!DOCTYPE html>
<html>
<head>
	<title>Q Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<style type="text/css">
	.pure-g {
		text-align: center;
	}
	</style>
</head>
<body style="margin: 0 auto; width: 1000px;">
	<div class="pure-g">
	    <div class="pure-u-1"><h1>Q Calculator</h1></div>
    </div>
    <form method="post">
	    <div class="pure-g">
	    	<div class="pure-u-1"><h2>Addition</h2></div>
		    <div class="pure-u-1-5"><input type="number" name="augend" value="<?php if (isset($augend)) echo $augend; ?>"></div>
		    <div class="pure-u-1-5">+</div>
		    <div class="pure-u-1-5"><input type="number" name="addend" value="<?php if (isset($addend)) echo $addend; ?>"></div>
		    <div class="pure-u-1-5"><input type="submit" value="="></div>
		    <div class="pure-u-1-5"><input type="number" id="sum" value="<?php if (isset($sum)) echo $sum; ?>"></div>
	    </div>
	    <div class="pure-g">
	    	<div class="pure-u-1"><h2>Subtraction</h2></div>
		    <div class="pure-u-1-5"><input type="number" name="minuend" value="<?php if (isset($minuend)) echo $minuend; ?>"></div>
		    <div class="pure-u-1-5">–</div>
		    <div class="pure-u-1-5"><input type="number" name="subtrahend" value="<?php if (isset($subtrahend)) echo $subtrahend; ?>"></div>
		    <div class="pure-u-1-5"><input type="submit" value="="></div>
		    <div class="pure-u-1-5"><input type="number" id="difference" value="<?php if (isset($difference)) echo $difference; ?>"></div>
	    </div>
	    <div class="pure-g">
	    	<div class="pure-u-1"><h2>Multiplication</h2></div>
		    <div class="pure-u-1-5"><input type="number" name="multiplicand" value="<?php if (isset($multiplicand)) echo $multiplicand; ?>"></div>
		    <div class="pure-u-1-5">x</div>
		    <div class="pure-u-1-5"><input type="number" name="multiplier" value="<?php if (isset($multiplier)) echo $multiplier; ?>"></div>
		    <div class="pure-u-1-5"><input type="submit" value="="></div>
		    <div class="pure-u-1-5"><input type="number" id="product" value="<?php if (isset($product)) echo $product; ?>"></div>
	    </div>
	    <div class="pure-g">
	    	<div class="pure-u-1"><h2>Division</h2></div>
		    <div class="pure-u-1-5"><input type="number" name="dividend" value="<?php if (isset($dividend)) echo $dividend; ?>"></div>
		    <div class="pure-u-1-5">÷</div>
		    <div class="pure-u-1-5"><input type="number" name="divisor" value="<?php if (isset($divisor)) echo $divisor; else echo 1; ?>"></div>
		    <div class="pure-u-1-5"><input type="submit" value="="></div>
		    <div class="pure-u-1-5"><input type="number" id="quotient" value="<?php if (isset($quotient)) echo $quotient; ?>"></div>
	    </div>
    </form>
</div>
</body>
</html>