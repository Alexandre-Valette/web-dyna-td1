<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>


<body>
<form method="POST">
    <label for="color">Color : </label>
    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
<textarea name="message" id="message" placeholder="Écrivez ici"></textarea>
<?php
    if (empty($_POST)) 
    {
        echo "Erreur 404 : paramètre not found";
    }
    if (empty($_POST["size"] and $_POST["Color"])) 
    {
        echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
    }
    else 
    {
        echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
    }
?>
</body>
</html>