<?php include '../conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/principal.css">
    <link rel="stylesheet" href="../assets/css/formulario.css">
    <link rel="shortcut icon" href="../assets/img/users-solid.svg" type="image/x-icon">
    <title>Eliminados</title>
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
        <button onclick="window.location.href='principal_usuarios.php'" class="acceso">Lista Usuarios</button>
        
    </div>
</section>
    <section class="table">
        <table id="form-main">
            <thead>
                <tr>
                    <th>Foto Perfil</th>
                    <th>Permiso</th>
                    <th>Nombre Usuario</th>
                    <th>Sexo</th>
                    <th>Fecha Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql1 = "SELECT * FROM usuarios INNER JOIN permisos ON usuarios.id_permiso = permisos.id_permiso WHERE estado_usu = 0 ORDER BY id_usu DESC "; 
                    $consulta1 = mysqli_query($conexion, $sql1);
                    
                    while ($datos = mysqli_fetch_array($consulta1)) {
                        $id_usu = $datos['id_usu'];
                        $id_permiso = $datos['id_permiso'];
                        $foto_perfil = $datos['url_foto_usu'];
                        $permiso = $datos['tipo_permiso'];
                        $user = $datos['username'];
                        $sexo = $datos['sexo'];
                        $fecha_creacion = $datos['fecha_creacion_usu'];
                ?>
                <tr>
                    <td style="width: 25px; height:25px;" > 
                        <img style="width: 100px; height:100px;" src=" <?php echo $foto_perfil; ?> " alt="Foto de Perfil">    
                    </td>
                    <td> <?php echo $permiso; ?>    </td>
                    <td> <?php echo $user; ?>    </td>
                    <td> <?php if ($sexo == '1') { echo 'Masculino'; } elseif ($sexo == '2') { echo 'Femenino'; } else { echo 'No definido'; }  ?>     
                    </td>
                    <td> <?php echo $fecha_creacion; ?>  </td>
                    <td>    
                        <?php   
                            $code_id = base64_encode($id_usu);
                            echo '<a href="activar.php?id=' . $code_id . '" onclick="return confirm(\'¿Restaurar Usuario?\');"> <img class="icono" src="../assets/img/user-plus-solid.svg" alt="Activar usuario"> </a> <br><br>';
                            echo '<a href="borrado.php?id=' . $code_id . '" onclick="return confirm(\'¿Eliminar Definitivamente?\');"> <img class="icono" src="../assets/img/trash-solid.svg" alt="Eliminar Definitivamente"> </a>';

                        ?> 
                    </td>
                </tr>
                <?php
                    } //FINAL - WHILE
                ?>   
            </tbody>
        </table>
    </section>
    <footer>
        <?php include '../pie.html'; ?>
    </footer>
</body>
</html>





