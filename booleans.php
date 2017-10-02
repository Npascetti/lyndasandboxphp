<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>php booleans</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="index.php">Main/ String Functions & Integers</a></li>
				<li><a href="assocarrays.php">Associated Arrays</a></li>
				<li><a href="arrayfunctions.php">Array Functions</a></li>
				<li><a href="booleans.php">Booleans</a></li>
				<li><a href="null.php">Null</a></li>
			</ul>
		</nav>
		<?php
		  $result1 = true;
		  $result2 = false;
		?>
		Result1: <?php echo $result1; ?><br />
		Result2: <?php echo $result2; ?><br />

		result2 is boolean? <?php echo is_bool($result2); ?><br />
		<br />

		<?php $number = 3;
		if(is_float($number) ) {
			echo "It is a float";
		}
		?>

	</body>
</html>