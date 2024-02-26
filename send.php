<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $correo = $_REQUEST["correo"];
    $telefono = $_REQUEST["telefono"];

    $errors = [];
    if (!empty($errors)) {
        echo "<div class='error'>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo "</div>";
    }

    echo '<a href="./">Volver</a> <br>';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Formulario</title>
    <link rel="stylesheet" href="./style/reset.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<h2>Datos ingresados:</h2>
<p>Nombre: <?php echo $nombre; ?></p>
<p>Apellido: <?php echo $apellido; ?></p>
<p>Edad: <?php echo $edad; ?></p>
<p>Sexo: <?php echo $sexo; ?></p>
<p>Correo electrónico: <?php echo $correo; ?></p>
<p>Número de teléfono: <?php echo $telefono; ?></p>
</body>
</html>
