<?php
// Obtiene el valor del input nombre y apellido y lo muestra por pantalla con la palabra Hola al principio.
$nom1= $_POST['name'];
$apell1= $_POST['surname'];
// htmlspecialchars evita que puedan insertar codigo distinto a palabras
echo "¡Hola". " " . $nom1  . " " . $apell1 . "!";
?>