<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2b</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="3">
		<tr>
			<th>kolom 1</th>
			<th>kolom 2</th>
			<th>kolom 3</th>
			<th>kolom 4</th>
			<th>kolom 5</th>
		</tr>

			<?php 
			$a = 1;
				while ($a <=5) {
					echo "<tr>";
					if ($a %2 == 1) {
						for ($b=1; $b <=5 ; $b++) { 
							echo "<td>Baris $a, kolom $b</td>";
						}
					}else{
						for ($b=1; $b <= 5 ; $b++) { 
							echo "<td>&nbsp</td>";
						}
					}
					$a++;
				}
			?>
	</table>

</body>
</html>