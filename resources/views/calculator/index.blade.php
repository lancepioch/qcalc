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
    <div class="pure-g">
    	<div class="pure-u-1"><h2>Addition</h2></div>
	    <div class="pure-u-1-5"><input type="number" name="augend"></div>
	    <div class="pure-u-1-5">+</div>
	    <div class="pure-u-1-5"><input type="number" name="addend"></div>
	    <div class="pure-u-1-5"><input type="submit" value="="></div>
	    <div class="pure-u-1-5"><input type="number" id="sum"></div>
    </div>
    <div class="pure-g">
    	<div class="pure-u-1"><h2>Subtraction</h2></div>
	    <div class="pure-u-1-5"><input type="number" name="minuend"></div>
	    <div class="pure-u-1-5">–</div>
	    <div class="pure-u-1-5"><input type="number" name="subtrahend"></div>
	    <div class="pure-u-1-5"><input type="submit" value="="></div>
	    <div class="pure-u-1-5"><input type="number" id="difference"></div>
    </div>
    <div class="pure-g">
    	<div class="pure-u-1"><h2>Multiplication</h2></div>
	    <div class="pure-u-1-5"><input type="number" name="multiplicand"></div>
	    <div class="pure-u-1-5">x</div>
	    <div class="pure-u-1-5"><input type="number" name="multiplier"></div>
	    <div class="pure-u-1-5"><input type="submit" value="="></div>
	    <div class="pure-u-1-5"><input type="number" id="product"></div>
    </div>
    <div class="pure-g">
    	<div class="pure-u-1"><h2>Division</h2></div>
	    <div class="pure-u-1-5"><input type="number" name="dividend"></div>
	    <div class="pure-u-1-5">÷</div>
	    <div class="pure-u-1-5"><input type="number" name="divisor"></div>
	    <div class="pure-u-1-5"><input type="submit" value="="></div>
	    <div class="pure-u-1-5"><input type="number" id="quotient"></div>
    </div>
</div>
</body>
</html>