<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $correo = $_REQUEST["correo"];
    $telefono = $_REQUEST["telefono"];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Formulario</title>
    <link rel="stylesheet" href="../style/svg.css">
    <link rel="stylesheet" href="../style/reset.css">
    <style>
        .main-container {
            display: flex;
            position: absolute;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            z-index: 10;
            width: 100%;
            top: 0;
        }

        .main-container a {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .main-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <svg id="svg"></svg>
    <div class="main-container">
        <h2>Datos ingresados:</h2>
        <p>Nombre: <?php echo $nombre; ?></p>
        <p>Apellido: <?php echo $apellido; ?></p>
        <p class="genero">Edad: <?php echo $edad; ?></p>
        <p>Sexo: <?php echo $sexo; ?></p>
        <p>Correo electrónico: <?php echo $correo; ?></p>
        <p>Número de teléfono: <?php echo $telefono; ?></p>
        <a href="../index.php">Volver</a>
    </div>
    <script src="../script/script.js"></script>
</body>

</html>