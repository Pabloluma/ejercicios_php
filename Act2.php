<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Act2.php" method = "post">
    <label >Distancia:</label><br>  
    <input type = "number" name = "distance">
    <br><label >Velocidad media:</label><br>
    <input type = "number" name = "avg">
    <input type = "submit" value = "Enviar">
</form>
<?php
$distancia= $_POST['distance'];
$velocidad= $_POST['avg'];
echo "Tardará " . $distancia / $velocidad;
?>
</body>
</html>