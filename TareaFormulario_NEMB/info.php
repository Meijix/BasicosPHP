<!-- http://127.0.0.1/PHP-Naty/CursoDGTIC/BasicosPHP/TareaFormulario_NEMB/info.php -->
<?php 
session_start();
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
            <p><strong>Nombre completo:</strong> <?php echo $_SESSION['login']['nombre']; ?></p>
            <p><strong>Número de Cuenta:</strong> <?php echo $_SESSION['login']['num_cta']; ?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo $_SESSION['login']['fecha_nac']; ?></p>
    </div>
    <!--  Tabla de usuarios registrados -->
    <div>
        <h3>Usuarios registrados</h3>
        <table class="tabla_usuarios">
            <tr>
                <th>Nombre</th>
                <th>Numero de cuenta</th>
                <th>Fecha de nacimiento</th>
            </tr>
            <?php foreach ($_SESSION['alumnosRegistrados'] as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['nombre'] . ' ' . $alumno['primer_apellido'] . ' ' . $alumno['segundo_apellido']; ?></td>
                    <td><?php echo $alumno['num_cta']; ?></td>
                    <td><?php echo $alumno['fecha_nac']; ?></td>
                </tr>
            <?php } ?>
        </table>

    <a href="formulario.php">Ir a Formulario</a>
    <a href="logout.php">Cerrar Sesión</a>
    </div>

</body>
</html>