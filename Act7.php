<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Muestra la tabla del mustiplicar del número que se introduzca</h3>
    <form action="Act7.php" method = "post">
        <label >Número:</label><br>
        <input type = "number" name = "numero" min="1" max="9" required>
        <input type = "submit" value = "Enviar">
    </form>
    
    <?php
    if (isset($_POST['numero'])) {
        $num= $_POST['numero'];
        echo "<br>";
        // Realiza un bucle de 10 vueltas ya que la tabla de multiplicar va del 1 al 10
        for ($i=1; $i < 10 + 1 ; $i++) { 
            $mult = $num * $i;
            echo $num . " * " . $i . " = " . $mult . "<br>";
        }
    }
    ?>
</body>
</html>