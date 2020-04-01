<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exo 6</title>
</head>


<body>
	<form method="POST">
		<label for="contenue">Lignes : </label>
		<input name="nbligne" id="nbligne" placeholder="Lignes"></input>
		<label for="contenue">Colonnes : </label>
		<input name="nbcolonne" id="nbcolonne" placeholder="Colonnes"></input>
		<input type="submit" value="Valider"></input>
	</form>
	<a href="?nbligne=2&nbcolonne=2">2 x 2</a>
	<a href="?nbligne=5&nbcolonne=5">5 x 5</a>
	<a href="?nbligne=10&nbcolonne=8">10 x 8</a>

	<?php
	include "functions.php";
	createHtmlTable($_POST["nbligne"]+1,$_POST["nbcolonne"]+1);
	include "footer.php";
	$tableauAsso=["SMITH"=>5,"DOE"=>22,"DOYLE"=>37];
	echo $tableauAsso["DOE"];
	?>