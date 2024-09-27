<?php
if (isset($_POST['productosArray'])) {
    // Obtiene el JSON que tenemos en productosArray oculto que hemos ido rellenando con Javascript.
    // Con true indicamos que queremos que lo pase a string, en caso de no ponerlo se guardará como objeto.
    $productos = json_decode($_POST['productosArray'], true);

// Comprobamos que no esté vacío. En caso de que lo esté mostrará un mensaje de que esta vacío el carrito
    if (!empty($productos)) {
        echo "<h2>Carrito de la compra:</h2>";
        echo "<ul>";
        // var_dump($productos);
        foreach ($productos as $producto) {
            echo "<li>" . $producto . "</li>";
        }
        echo "</ul>";
    } else {
        echo "El carrito está vacío";
    }
}
?>