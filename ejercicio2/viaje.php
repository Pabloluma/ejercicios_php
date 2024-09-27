<?php
$distancia= $_POST['distance'];
$velocidad= $_POST['avg'];

$tiempo = $distancia / $velocidad;
echo "Tardará " . strval($tiempo);
?>