<!DOCTYPE HTML>

<html lang="en">
	<head>
		<title>Lynda Sandbox Practice</title>
	</head>
	<body>
		<!--start of string functions section-->
		<?php

		$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";

		$third = $first;
		$third .= $second;
		echo $third;

		?>
		<br />
		Lowercase: <?php echo strtolower($third); ?><br />
		Uppercase : <?php echo strtoupper($third); ?><br />
		Uppercase first: <?php echo ucfirst($third); ?><br />
		Uppercase words: <?php echo ucwords($third); ?><br />
		<br />
		Length: <?php echo strlen($third); ?><br />
		Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
		Find : <?php echo strstr($third, "brown"); ?><br />
		Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
		<br />
		Repeat: <?php echo str_repeat($third, 2); ?><br />
		Make substring: <?php echo substr($third, 5, 10); ?><br />
		Find position: <?php echo strpos($third, "brown"); ?><br />
		Find character: <?php echo strchr($third, "z"); ?><br />
		<!--End of string functions sections-->

		<!--Start of Numbers - Integers-->
		<?php
		  $var1 = 3;
		  $var2 = 4;
		?>
		<br />
		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
		Absolute value: <?php echo abs(0 - 300); ?><br />
		Exponential: <?php echo pow(2, 8); ?><br />
		Square Root: <?php echo sqrt(100); ?><br />
		Modulo: <?php echo fmod(20, 7); ?><br />
		Random: <?php echo rand(); ?><br />
		Random (min,max): <?php echo rand(1, 10); ?><br />
		<br />
		+= : <?php $var2 += 4; echo $var2; ?><br />
		-= : <?php $var2 -= 4; echo $var2; ?><br />
		*= : <?php $var2 *= 3; echo $var2; ?><br />
		/= : <?php $var2 /= 4; echo $var2; ?><br />
		<br />
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
		<br />

		<!--End of numbers - integers-->

		<!--Start of numbers - floating points-->

		<?php echo $float = 3.14; ?><br />
		<?php echo $float + 7; ?><br />
		<?php echo 4/3; ?><br />
		<br />
		Round: <?php echo round($float, 1); ?><br />
		Ceiling: <?php echo ceil($float); ?><br />
		Floor: <?php echo floor($float); ?><br />
		<br />

		<?php $integer = 3; ?>

		<?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
		<?php echo "Is {$float} integer?" . is_int($float); ?><br />
		<br />
		<?php echo "Is {$integer} integer? " . is_float($integer); ?><br />
		<?php echo "Is {$float} integer?" . is_float($float); ?><br />
		<br />
		<?php echo "Is {$integer} integer? " . is_numeric($integer); ?><br />
		<?php echo "Is {$float} integer?" . is_numeric($float); ?><br />



	</body>
</html>