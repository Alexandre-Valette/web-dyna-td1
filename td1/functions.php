<?php
function createHtmlTable($nbligne,$nbcolonne) {
	echo"<table border='1'>";
	echo"<tbody>";
	for($i=0;$i<$nbligne+1;$i++){
		echo"<tr>";

		for ($j=0; $j<$nbcolonne+1; $j++) { 

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

	echo"</tbody>";
	echo"</table>";
}
?>