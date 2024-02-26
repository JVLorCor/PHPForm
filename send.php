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
    } else {
        echo "<h2>Datos ingresados:</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>Correo electrónico: $correo</p>";
        echo "<p>Número de teléfono: $telefono</p>";
    }
}

echo '<a href="./">Volver</a> <br>';
