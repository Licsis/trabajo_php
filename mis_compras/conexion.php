<?php
    /*session_start();
    include "conexion.php";*/

    $host = "localhost";
    $user = "root";
    $bd = "sistemas";
    $pass = "";

   // Conexión a la base de datos
   $conexion = mysqli_connect($host, $user, $pass, $bd);

   // Verificar la conexión
   if (!$conexion) {
       die("Error de conexión: " . mysqli_connect_error());
   }else {
        
   }

   

?>