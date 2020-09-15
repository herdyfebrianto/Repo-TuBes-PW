<!DOCTYPE html>
<html>
<head>
	<title>latihan 2c</title>
	<style type="text/css">
		.kotak1{
			height: 30px;
			width: 30px;
			text-align: center;
			
			border: 1px black solid;
			float: left;
			margin : 2px;
			color: black;
		}

		.kotak2{
			background-color: #57e65a;
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px black solid;
			float : left;
			margin : 2px;
			color: black;
		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>

		<?php 

				for ($a=1; $a <=5 ; $a++) { 
					for ($b=1; $b <=$a; $b++) { 
						echo "<div class='kotak1'>#$b</div>";
						echo "<div class='kotak2'>$b</div>";
					}
					echo "<div class='clear'></div>";
				}

		 ?>

</body>
</html>