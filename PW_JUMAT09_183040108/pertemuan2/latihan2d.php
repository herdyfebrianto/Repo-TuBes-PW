<!DOCTYPE html>
<html>
<head>
	<title>latihan 2d</title>
	<style type="text/css">
		
		.kotak1{
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float : left;
			margin: 2px;
			color: black;
		}

		.ganjil{
			background-color: #003;
			color: #fff;
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float: left;
			margin: 2px;
		}
		.genap{
			background-color: #57e65a;
			color: black;
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float: left;
			margin: 2px;
		}
		.clear {
			clear: both;
		}

	</style>
</head>
<body>
	<?php
		for ($a=1; $a <=5; $a++) {
			for ($b=1; $b <=$a ; $b++) { 
				if ($a % 2 == 1) {
					echo "<div class='kotak1'>#$a</div>";
					echo "<div class='ganjil'>$b</div>";
				}else{
					echo "<div class='kotak1'>#$a</div>";
					echo "<div class='genap'>$b</div>";

				}
				
			} echo "<div class='clear'</div>";
		}

	?>

</body>
</html>