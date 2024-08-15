<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 2</title>
</head>
<body>
    <?php
    if ($_POST) {
        $nom1 = $_POST['nom_usu'];
        $pass1 = $_POST['pass'];

        $nom = mysqli_real_escape_string($conexion, $_POST['nom_usu']);
        $pass = mysqli_real_escape_string($conexion, $_POST['pass']);
        
        $pass2 = md5($_POST['pass']);
        /*echo "Contraseña: ". $nom;
        echo "<br>Contraseña: ". $pass;
        echo "<br><br>Contraseña cifrada: ". $pass2;*/

       $sql = "SELECT * FROM usuarios INNER JOIN permisos ON usuarios.id_permiso = permisos.id_permiso where estado_usu = 1 AND `username` = '$nom' AND `password` = '$pass'";
        $query = mysqli_query($conexion, $sql);
        
        while ($consulta = mysqli_fetch_array($query)) {
            $_SESSION['identificador'] = $consulta['id_usu'];
            $_SESSION['permiso'] = $consulta['id_permiso'];
            $_SESSION['nom_usu'] = $consulta['username'];
            $_SESSION['pass'] = $consulta['password'];
            $_SESSION['estado'] = $consulta['estado_usu'];
            $_SESSION['tipo_permiso'] = $consulta['tipo_permiso'];
        }

        
        $user = $_SESSION['nom_usu']; 
        $clave = $_SESSION['pass'];

        if ($_SESSION['permiso'] == 1) {
            echo "<h2>Eres ". $_SESSION['tipo_permiso']."</h2><br>";
            echo "Bienvenido ".$user;
            echo "<br> <br>  Tu contraseña es: ". $pass2;
            echo "<br> <br>  Tu contraseña es: ". $pass;
        }elseif ($_SESSION['permiso'] == 2) {
           echo "Bienvenido".  $_SESSION['nom_usu'];
            echo "Eres ". $_SESSION['tipo_permiso'];
           
        }else {
            echo "No tiene permisos de usuario"; 
        } 
    }
        
    ?>
</body>
</html>