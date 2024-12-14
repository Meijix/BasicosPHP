<!-- Crear un script que genere lo que se muestra en las siguientes imágenes considerando lo siguiente:

 Utilizar una variable para el máximo de filas que queremos (30 filas). en la imagen se muestran solo 10 filas
 Debe estar centrado.
 Pueden ocupar cualquier simbolo o imagen (en los ejemplos se ocupó Font Awesome)
 No se repite longitud en las filas. -->

<?php
$filas = 10;
$espacios = 30;
$simbolo = "🌟"
    for ($i = 1; $i <= $filas; $i++) {
    for ($j = 1; $j <= $espacios; $j++) {
        if ($j == ($espacios / 2) - $i || $j == ($espacios / 2) + $i) {
            echo $simbolo;
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>