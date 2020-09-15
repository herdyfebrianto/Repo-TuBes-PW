<!DOCTYPE html>
<html>
<head>
	<title>latihan 1c</title>
	<style type="text/css">
		.konten {
			width: 220px;
			height: 220px;
			border: 1px solid black;
		}

		.kotak1 {
			width: 50px;
			height: 50px;
			text-align: center;
			padding: 0 10px 0 0;
			border: 1px solid black;
			margin: 12px 5px;
			float: left;
		}

		.clear {
			clear: both;
		}

	</style>
</head>
<body>

	<?php 
		echo "<div class='konten'>";
		$a = "A";
		$b = "B";
		$c = "C";
		echo "<div class='kotak1'>" . $a . "</div>";
		echo "<div class='kotak1'>" . $a . "</div>";
		echo "<div class='kotak1'>" . $a . "</div>";
		echo "<div class='clear'>";
		echo "<div class='kotak1'>" . $b . "</div>";
		echo "<div class='kotak1'>" . $b . "</div>";
		echo "<div class='clear'>";
		echo "<div class='kotak1'>" . $c . "</div>";
		echo "</div>";
	 ?>

</body>
</html>