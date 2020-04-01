<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exo 5</title>
</head>


<body>
	<a href="?nbligne=2&nbcolonne=2">2 x 2</a>
	<a href="?nbligne=5&nbcolonne=5">5 x 5</a>
	<a href="?nbligne=10&nbcolonne=8">10 x 8</a>

	<?php
	include "functions.php";
	createHtmlTable($_GET["nbligne"],$_GET["nbcolonne"]);
	include "footer.php";
	?>