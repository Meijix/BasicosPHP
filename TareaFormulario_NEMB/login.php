<!DOCTYPE html>
<html lang="en">
<!-- Formulario de inicio de sesion -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>INICIA SESION</title>
</head>
<body>
    <div class="contenedor">
        <h1>Inicia sesion</h1>
        <p>Ingresa tu numero de cuenta y contraseña</p>
        <form action="procesar_formulario.php" method="POST">
            <label for="usuario">Numero de cuenta:</label>
            <input class="caja" type="text" name="usuario" id="usuario" required>
            <br>
            <label for="password">Contraseña:</label>
            <input class="caja" type="password" name="password" id="password" required>
            <br>
            <br>
            <center><input class="btn-ingresar" type="submit" value="Ingresar"></center>
        </form>
    </div>
</body>
</html>