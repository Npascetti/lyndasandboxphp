<!DOCTYPE HTML>

<html lang="en">
	<head>
		<title>NULL</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
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
		$var1 = null;
		$var2 = " ";
		?>

		var1 null?: <?php echo is_null($var1); ?><br />
		var2 null?: <?php echo is_null($var2); ?><br />
		var3 null?: <?php echo is_null($var3); ?><br />
		<br />
		var1 is set?: <?php echo isset($var1); ?><br />
		var2 is set?: <?php echo isset($var2); ?><br />
		var3 is set?: <?php echo isset($var3); ?><br />
		<br />

		<?php // empty in php: "", null, 0, 0.0, "0", false, array() ?>

		<?php $var3 = "0" ?>
		var1 is empty?: <?php echo empty($var1); ?><br />
		var2 is empty?: <?php echo empty($var2); ?><br />
		var3 is empty?: <?php echo empty($var3); ?><br />

	</body>
</html>