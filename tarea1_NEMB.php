<!-- 
Natalia Edith Mejia Bautista
Tarea 1. Script que genere una piramide dado un simbolo y un número de filas -->

<?php
$filas = 20;
$simbolo = "🌟";
//recorrer las filas
    for ($i = 1; $i <= $filas; $i++) {
        //repetir el simbolo para la fila
        $piramide = str_repeat($simbolo, $i);
        //centrar la piramide
        $pirCentrada = "<center>" . $piramide . "</center>";
        echo $pirCentrada . "<br>";
}
?>