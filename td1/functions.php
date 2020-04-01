	<a href="?nbligne=2&nbcolonne=2">2 x 2</a>
	<a href="?nbligne=5&nbcolonne=5">5 x 5</a>
	<a href="?nbligne=10&nbcolonne=8">10 x 8</a>


	<table border='1'>
		<tbody>
			<?php
			for($i=0;$i<$_GET["nbligne"];$i++){
				echo"<tr>";

				for ($j=0; $j<$_GET["nbcolonne"]; $j++) { 

					if(($i%2)==0){
						$Bold = "bold";
					}
					else{
						$Bold = "normal";
					}

					if(($j%2)==0){
						$Red = "red";
					}
					else{
						$Red = "black";
					}

					echo"<td align='center'><p style='font-weight: $Bold; color:$Red;'>$i-$j";
					echo"</p></td>";
				}

				echo"</tr>";
			}
			?>
		</tbody>
	</table>