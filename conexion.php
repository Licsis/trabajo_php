<?php
    session_start();
    // Configuración de la base de datos
    $host = 'localhost'; // Cambia esto por tu servidor de base de datos
    $dbname = 'sistemas'; // Cambia esto por el nombre de tu base de datos
    $username = 'root'; // Cambia esto por tu usuario de base de datos
    $password = ''; // Cambia esto por tu contraseña de base de datos

    // Crear conexión con mysqli
    $conexion = new mysqli($host, $username, $password, $dbname);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }