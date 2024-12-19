<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de registro</title>
</head>
<body>
<div class="contenedor">
        <h2>Formulario de registro de alumnos</h2>
        <form action="formulario.php" method="post">
            <label for="num_cta">Numero de cuenta:</label>
            <input type="text" name="num_cta" placeholder="317737822" required>
            <br>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="Natalia" required>

            <label for="primer_apellido">Primer Apellido:</label>
            <input type="text" name="primer_apellido" placeholder="Mejia" required>

            <label for="segundo_apellido">Segundo Apellido:</label>
            <input type="text" name="segundo_apellido" placeholder="Bautista" required>
            <br>
            <label for="genero">Género:</label>
            <select name="genero" required>
                <option value="">Seleccione Género</option>
                <option value="M">Hombre</option>
                <option value="F">Mujer</option>
                <option value="O">Otro</option>
            </select>

            <label for="fec_nac">Fecha de Nacimiento:</label>
            <input type="date" name="fec_nac" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" placeholder="12341234@" required>
            <br>
            <center><button class="btn-ingresar" type="submit">Registrarme</button></center>
            
        </form>
        <a href="info.php">Ver información</a>
        <a href="logout.php">Cerrar Sesión</a>
        
    </div>

</body>
</html>