<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Muestra la suma de los números del 1 hasta el introducido</h3>
<form action="Act6.php" method = "post">
    <label >Número:</label><br>
    <input type = "number" name = "numero" min="1" required>
    <input type = "submit" value = "Enviar">
</form>
<?php

if (isset($_POST['numero'])){
    $num= $_POST['numero'];
    $suma = 0;
    // Realiza un bucle desde 1 hasta el numero indicado y +1 para que tambien pase por ese numero ya que en el for each siempre se queda 1 numero antes del ultimo
for ($i=1; $i < $num+1; $i++) { 
    $suma = $suma + $i;
}
echo $suma;
}

?>
</body>
</html>