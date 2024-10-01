<?php include "../conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/users-solid.svg" type="image/x-icon">
    <title>Baja Usuario</title>
</head>
<body>
<?php
    if (isset($_REQUEST['id'])) {
        // Capturar el valor de 'id' y lo almacenar en una variable
        $decoded_id = base64_decode($_GET['id']);
    
        // Actualizo el estado del usuario a 0, eliminandolo de forma Física de la base de datos.
        $sql = "DELETE FROM `usuarios` WHERE id_usu = $decoded_id ";
        mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
    }
?>
    <!--script>
        window.location.replace("us_eliminados.php");
    </script-->
</body>
</html>

