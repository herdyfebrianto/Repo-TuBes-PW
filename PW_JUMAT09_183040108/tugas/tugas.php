<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
	<style type="text/css">
		
		.kotakA {
			background-color: white;
			width: 35px;
			height: 35px;
			text-align: center;
			line-height: 35px;
			border: 1px solid black;
			display: inline-block;
			margin: 2px;
			color: white;
		}

		.kotakB {
			background-color: black;
			width: 35px;
			height: 35px;
			text-align: center;
			line-height: 35px;
			border: 1px solid black;
			display: inline-block;
			margin: 2px;
			color: black;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php
	for ($a=1; $a <= 5 ; $a++) { 
		for ($b= 1; $b <= 5 ; $b++) { 
			if ($b %2 == 1 && $a % 2 == 0 || $b % 2 == 0 && $a % 2 == 1) {
				echo "<div class='kotakA kotakB'>$a</div>";
			}else{
				echo "<div class='kotakA'>$a</div>";
			}
		} echo "<br>";
	}
	?>

</body>
</html>