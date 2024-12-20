<!-- http://127.0.0.1/PHP-Naty/CursoDGTIC/BasicosPHP/TareaFormulario_NEMB/info.php -->
<?php 
require_once('usuario.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Información alumnos</title>
</head>
<body>
    <div class="contenedor">
        <h2>Mi informacion</h2>
            <p><strong>Nombre completo:</strong><?php echo $_SESSION['login']['num_cta']; ?></p>
            <p><strong>Número de Cuenta:</strong> </p>
            <p><strong>Fecha de Nacimiento:</strong> </p>
        </div>
        <h3>Usuarios registrados</h3>
        <ul>
            <li>Número de Cuenta: 1, Nombre: Admin General, Fecha de Nacimiento: 01/01/2000</li>
            <!-- Aquí se pueden agregar más usuarios si es necesario -->
        </ul>
        <a href="formulario.php">Ir a Formulario</a>
        <a href="logout.php">Cerrar Sesión</a>
    </div>

</body>
</html>