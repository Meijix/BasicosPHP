<?php
include_once 'usuario.php';

if(isset($_POST['entrar'])) {
    $alumno = isset($_SESSION['Alumno'][$_POST['num_cta']]) ? $_SESSION['Alumno'][$_POST['num_cta']] : [];
    if ($alumno != [] && $_POST['num_cta'] == $alumno['num_cta'] &&  $_POST['contrasena'] == $alumno['contrasena']) {
        $_SESSION['login'] = [
            'nombre' => $alumno['nombre'] . ' ' . $alumno['primer_apellido'],
            'num_cta' => $alumno['num_cta'], 
            'fecha_nac' => $alumno['fecha_nac'], 
        ];
        header('Location: info.php');
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo 'Usuario o contraseña incorrectos';
    }    
}
?>
<!DOCTYPE html>
<html lang="es">
<!-- Formulario de inicio de sesion -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Iniciar sesion</title>
</head>
<body>
    <div class="contenedor">
        <h1>Inicia sesion</h1>
        <p>Ingresa tu numero de cuenta y contraseña</p>
        <form action="login.php" method="POST">
            <label for="usuario">Numero de cuenta:</label>
            <input class="caja" type="text" name="usuario" id="usuario" required>
            <br>
            <label for="password">Contraseña:</label>
            <input class="caja" type="password" name="password" id="password" required>
            <br>
            <br>
            <center><input class="btn-ingresar" type="submit" value="Ingresar"></center>
        </form>

        <a href="formulario.php">Registrarse</a>
    </div>
</body>
</html>