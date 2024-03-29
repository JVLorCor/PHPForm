<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulario de contacto">
    <link rel="shortcut icon" href="./img/icons8-3d-touch-16.png" type="image/x-icon">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/svg.css">
</head>

<body>
    <svg id="svg"></svg>
    <form class="main-container" method="POST" action="./includes/send.php">
        <h1>Formulario PHP</h1>
        <fieldset class="datos-usuario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Jose" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Lorenzo" required>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" placeholder="18" required>
        </fieldset>

        <fieldset class="genero">
            <label for="sexo-masculino">Sexo:</label>
            <input type="radio" name="sexo" id="sexo-masculino" value="masculino" checked required> Masculino
            <input type="radio" name="sexo" id="sexo-femenino" value="femenino" required> Femenino
        </fieldset>

        <fieldset class="datos-contacto">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="jvlorcor.appventurers@gmail.com" required>
            <label for="telefono">Número de teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="629167253" required>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>
    <script src="./script/script.js"></script>
</body>

</html>