

<?php include '../conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" href="../assets/css/formulario.css">
    <link rel="shortcut icon" href="../assets/img/users-solid.svg" type="image/x-icon">
    <title>Usuarios</title>
</head>
<body>
    <section class="cabecera">
        <div id="home">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path  d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
            </svg>
            <h3><a href="../index.php"> Mis Compras</a></h3>
        </div>
        <div id="btn-accesos">
            
            <button onclick="window.location.href='principal_usuarios.php'" class="acceso">Volver</button>
            <!--a href="login.php"><button><img id="login" src="../assets/img/right-to-bracket-solid.svg" alt="Login"></button></a-->
        </div>
    </section>
    <form action="mod_usu2.php" method="post" class="formulario">
        <fieldset>
            <legend>
                Modificar Usuario
            </legend>
            <div class="flex-form">
            <?php 
                 //capturo el ID del USUARIO
                $usuario = base64_decode($_REQUEST['id']);
                 //var_dump('----'.$usuario);
                $sql2 = "SELECT permisos.id_permiso, tipo_permiso, id_usu FROM permisos INNER JOIN usuarios ON permisos.id_permiso = usuarios.id_permiso WHERE estado_per = 1 AND id_usu =$usuario";
                $consulta2 = mysqli_query($conexion,$sql2);
                
                    
                    $sql1 ="SELECT * FROM usuarios WHERE `estado_usu` = 1 AND `id_usu` = $usuario ";
                    $consulta1 = mysqli_query($conexion,$sql1);
                if( $datos = mysqli_fetch_array($consulta2)){
                    $id_permiso = $datos['id_permiso'];
                    $tipo_permiso = $datos['tipo_permiso'];
                    ?>
                    <label for="permisos"><?php echo "Permiso: ".$tipo_permiso; ?></label>
                <input type="text" name="permiso" value =" <?php echo $id_permiso; ?>" placeholder="PERMISOS">
                    <?php
                }   
                
            if ($datos2 = mysqli_fetch_array($consulta1) ) { // INICIO IF
               // var_dump($datos);
                $identificador = $datos2['id_usu'];
                $usuario2 = $datos2['username'];
                $pass = $datos2['password'];
                $sexo = $datos2['sexo'];
                
            ?>
                <input type="text" name="usuario"  value="<?php echo $usuario2 ;?>" placeholder="Nombre Usuario">
                <input type="hidden" name="identificador" value="<?php echo $identificador ; ?>">
                <input type="password" name="pass" value="<?php echo $pass ;?>"  placeholder="Contraseña">
                <input type="text" name="sexo" value=" <?php  if ($sexo == '1') { echo 'Masculino'; } elseif ($sexo == '2') { echo 'Femenino'; } else { echo 'No definido'; }; ?>" >
            <?php
                } //FINAL IF
            ?>
            <input type="submit" value="Actualizar" id="btn-formulario">
        </div>
        </fieldset>
    </form>

    <footer>
        <?php include '../pie.html'; ?>
    </footer>
</body>
</html>
