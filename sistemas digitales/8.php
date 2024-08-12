<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>par o impar?</title>
</head>
<body>
    <?php
   function par($n) {
    return $n % 2 == 0;
}


if (isset($_POST['n'])) {
    $numero = $_POST['n'];
    
 
    if (is_numeric($numero)) {
        $resultado = par($numero);
        echo $resultado ? "El número es par." : "El número es impar.";
    } else {
        echo "El valor ingresado no es un número válido.";
    }
} else {
    echo "No se ha enviado ningún número.";
}
    ?>
</body>
</html>