<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
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
        
        $pass2 = md5($pass);
        /*echo "Contraseña: ". $nom;
        echo "<br>Contraseña: ". $pass;
        echo "<br><br>Contraseña cifrada: ". $pass2;*/

       $sql = "SELECT * FROM usuarios INNER JOIN permisos ON usuarios.id_permiso = permisos.id_per where estado_usu = 1 AND `nom_usu` = '$nom' AND `pass` = '$pass'";
        $query = mysqli_query($conexion, $sql);
        
        while ($consulta = mysqli_fetch_array($query)) {
            $_SESSION['identificador'] = $consulta['id_usu'];
            $_SESSION['permiso'] = $consulta['id_permiso'];
            $_SESSION['nom_usu'] = $consulta['nom_usu'];
            $_SESSION['pass'] = $consulta['pass'];
            $_SESSION['sexo_usu'] = $consulta['sexo'];
            $_SESSION['estado'] = $consulta['estado_usu'];
            $_SESSION['tipo_permiso'] = $consulta['tipo_permiso'];
        }

        
        $user = $_SESSION['nom_usu']; 
        $clave = $_SESSION['pass'];
        $id_per = $_SESSION['permiso'];
        $tipo_per = $_SESSION['tipo_permiso'];

        if ($id_per == 1) {
            echo "<h2>Eres ". $tipo_per."</h2><br>";
            echo "Bienvenido ".$user;
            echo "<br> <br>  Tu contraseña es: ". $pass2;
            echo "<br> <br>  Tu contraseña es: ". $pass;

            echo "<button> <a href='logout.php'> Cerrar Sesion</a> </button>";
        }elseif ($id_per == 2) {
           echo "Bienvenido ".  $user;
            echo "Eres ". $tipo_per;
           
        }else {
            echo "No tiene permisos de usuario"; 
            ?>
            <script>
                window.location.replace("index.html");
            </script>
            <?php
        } 
    }
        
    ?>
</body>
</html>