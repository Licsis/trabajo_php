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
        $nom = $_POST['nom_usu'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM usuarios INNER JOIN permisos ON usuarios.id_permiso = permisos.id_permiso where estado_usu = 1 AND `username` = $nom AND `password` = $pass";
        $query = mysqli_query($conexion, $sql);
        
        while ($consulta = mysqli_fetch_array($query)) {
            $_SESSION['identificador'] = $consulta['id_usu'];
            $_SESSION['permiso'] = $consulta['id_permiso'];
            $_SESSION['nom_usu'] = $consulta['username'];
            $_SESSION['pass'] = $consulta['password'];
            $_SESSION['estado'] = $consulta['estado_usu'];
        }

        
        $user = $_SESSION['nom_usu']; 
        $clave = $_SESSION['pass'];

        if ($_SESSION['permiso'] === 1) {
            echo "Usuario ".$user;
            echo "<br> <br>  Pass ". $pass;
        }elseif ($_SESSION['permiso'] === 2) {
           echo "No tiene usuario"; 
        }       
    }
        
    ?>
</body>
</html>