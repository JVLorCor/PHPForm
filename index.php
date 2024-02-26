<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="./style.css/reset.css">
    <link rel="stylesheet" href="./style.css/style.css">
</head>

<body>
    <form class="main-container" method="POST" action="./send.php">
        <h1>Formulario PHP</h1>
        <fieldset class="datos-usuario">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="Jose" required>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" placeholder="Lorenzo" required>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" placeholder="18" required>
        </fieldset>

        <fieldset class="genero">
            <label for="sexo">Sexo:</label>
            <input type="radio" name="sexo" value="masculino" required> Masculino
            <input type="radio" name="sexo" value="femenino" required> Femenino
        </fieldset>

        <fieldset class="datos-contacto">
            <label for="correo">Correo electrónico:</label>
            <input type="email" name="correo" placeholder="jvlorcor.appventurers@gmail.com" required>
            <label for="telefono">Número de teléfono:</label>
            <input type="tel" name="telefono" placeholder="629167253" required>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>