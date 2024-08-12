<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Confirmado</title>
</head>
<body>

<h1>Pedido Confirmado</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $pizzas = $_POST["pizzas"];

    $archivo = fopen("pedido.txt", "a") or die("Error");

    fputs($archivo, "Nombre: $nombre\n");
    fputs($archivo, "Dirección: $direccion\n");
    foreach ($pizzas as $p) {
        fputs($archivo, "$p\n");
    }
    fputs($archivo, "\n");

    fclose($archivo);

    echo "<p>Gracias, $nombre. Tu pedido ha sido confirmado y guardado.</p>";
} else {
    echo "<p>Error: El formulario no se envió correctamente.</p>";
}

?>

</body>
</html>
