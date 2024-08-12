<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
<?php
function calculo($n1 , $n2){
    $r = $n1 + $n2;
    return $r;
}
$suma = calculo($_POST['numero1'], $_POST['numero2']);
echo "La suma de ".$_POST['numero1']." + ".$_POST['numero2']." es: ".$suma;
?>

</body>
</html>