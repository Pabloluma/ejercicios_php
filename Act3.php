<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Muestra que número es mayor</h3>
<form action="Act3.php" method = "post">
    <label >Numero1:</label><br>  
    <input type = "number" name = "numero1" min = "1" required>
    <br><label >Numero2:</label><br>
    <input type = "number" name = "numero2" min = "1" required>
    <br><label >Numero3:</label><br>
    <input type = "number" name = "numero3" min = "1" required>
    <input type = "submit" value = "Enviar">
</form>
<?php
// Con isset se comprueba si lo que se ha recogido es un valor o no está definido
if(isset($_POST['numero1']) & isset($_POST['numero2']) & isset($_POST['numero3']) ){
    $num1= $_POST['numero1'];
    $num2= $_POST['numero2'];
    $num3= $_POST['numero3'];
    $mayor = 0;
    if($num1 > $num2 && $num1 > $num3){
        $mayor = $num1;
    }else if($num2 > $num1 && $num2 > $num3) {
        $mayor = $num2;
    }else if ($num3 > $num1 && $num3 > $num2){
        $mayor = $num3;
    }
echo "El mayor es ". $mayor;    
}
?>
</body>
</html>