<?php
    // Definición de constantes para la configuración de la base de datos
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'prueba_db');
    // Conexión a la base de datos
    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Verificación de la conexión
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Establecer el conjunto de caracteres
    mysqli_set_charset($conexion, 'utf8');
?>