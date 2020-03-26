<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exo 4</title>
</head>


<body>
	<a href="?nbligne=2&nbcolonne=2">2 x 2</a>
	<a href="?nbligne=5&nbcolonne=5">5 x 5</a>
	<a href="?nbligne=10&nbcolonne=8">10 x 8</a>

	<table border='1'>
		<tbody>
			<?php
			for($i=0;$i<$_GET["nbligne"];$i++){
				echo"<tr>";
				
				for ($j=0; $j<$_GET["nbcolonne"]; $j++) { 
					echo"<td>";
					echo"$i-";
					echo "$j";
					echo"</td>";
				}
				
				echo"</tr>";
			}
			?>
		</tbody>
	</table>


	<?php
	include "footer.php";
	?>