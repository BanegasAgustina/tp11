<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<h3>Las claves ingresadas no coinciden. Inténtalo de nuevo.</h3>";
    } else {
        echo "<h3>Registro exitoso. Bienvenido, " . htmlspecialchars($username) . "!</h3>";
    }
}
?>

</body>
</html>