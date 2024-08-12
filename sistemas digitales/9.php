<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscripcion</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ar = fopen("inscripciones.txt", "a") or die("Error al abrir el archivo");

    fputs($ar, "Nombre: " . $_POST['nombre'] . "\n");
    fputs($ar, "DNI: " . $_POST['dni'] . "\n");
    fputs($ar, "Fecha de Nacimiento: " . $_POST['cumple'] . "\n");
    fputs($ar, "Curso Actual: " . $_POST['curso'] . "\n");
    fputs($ar, "Cantidad de Materias Adeudadas: " . $_POST['ma'] . "\n");
    fputs($ar, "Materia en la que se inscribe: " . $_POST['mi'] . "\n");
    fputs($ar, "Fecha de Inscripción: " . $_POST['fi'] . "\n");
    fputs($ar, "--------------------------------------------------------\n");


    fclose($ar);


    echo "<h1>Inscripción Registrada</h1>";
} else {
   echo "error";
}
?>
</body>
</html>