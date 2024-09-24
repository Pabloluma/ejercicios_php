<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Muestra en que categoría se encuentra la persona según la edad</h3>
<form action="Act5.php" method = "post">
    <label >Edad:</label><br>  
    <input type = "number" name = "age" min="1" required>
    <input type = "submit" value = "Enviar">
</form>
<?php

if (isset($_POST['age'])){
    $edad= $_POST['age'];
    $categoria= "";
    // Segun la edad, va entrando en los diferentes case hasta que una de las condiciones coincida
switch ($edad){
    case $edad < 12:
        $categoria = "Infante";
        break;
    case $edad >= 12 && $edad < 17:
        $categoria = "Adolescente";
        break; 
    case $edad >= 18 && $edad < 60:
        $categoria = "Adulto";
        break;
    case $edad >= 60:
        $categoria = "Anciano";
        break;
}
echo $categoria;
}

?>

</body>
</html>