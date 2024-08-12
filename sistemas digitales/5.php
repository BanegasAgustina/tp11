<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra</title>
</head>
<body>
   <?php
    $ap = "pedido.txt";
    $ar =fopen($ap , "r") or die ("error al abrir el archivo");

    while(!feof($ar)){
        $l = fgets($ar);
        $lf = nl2br($l);
        echo $lf;
    }
    fclose($ar)
    ?>
</body>
</html>