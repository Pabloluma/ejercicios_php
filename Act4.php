<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Muestra el día de la semana</h3>
<form action="Act4.php" method = "post">
    <label >Introduce un Número del 1 al 7:</label><br>  
    <input type = "number" name = "numero" required>
    <input type = "submit" value = "Enviar">
</form>
<?php
if (isset($_POST['numero'])){
    $num= $_POST['numero'];
    if ($num < 0 | $num > 7){
        echo "No es correcto el numero elegido";
    }
    // Agrega el valor del dia que corresponda la variable dia segun el numero.
    $dia = "";
    switch ($num){
        case 1:
            $dia = "Lunes";
            break;
        case 2:
            $dia = "Martes";
            break; 
        case 3:
            $dia = "Miércoles";
            break;
        case 4:
            $dia = "Jueves";
            break;
        case 5:
            $dia = "Viernes";
            break;
        case 6:
            $dia = "Sábado";
            break;
        case 7:
            $dia = "Domingo";
            break;
    }
    echo $dia;
}
?>
</body>
</html>