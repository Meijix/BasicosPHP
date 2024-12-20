<?php
session_start();
$_SESSION['alumnosRegistrados'] = [
    1 => [
        'num_cta' => 1,
        'nombre' => "Admin",
        "primer_apellido" => "General",
        "segundo_apellido" => "",
        "genero" => "O",
        "contrasena" => "admnin123",
        "fecha_nac" => "2024-01-01"
    ]
];

print_r($_SESSION);

?> 