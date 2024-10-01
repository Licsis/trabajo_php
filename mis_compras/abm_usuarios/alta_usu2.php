<?php
    include '../conexion.php'; 


    $permiso= $_REQUEST['permiso'];
    $usu = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];
    $sexo = $_REQUEST['sexo'];

    // Verifica si se ha enviado una imagen
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        // Obtener información de la imagen
        $nombreArchivo = $_FILES['foto']['name'];
        $tipoArchivo = $_FILES['foto']['type'];
        $tamanioArchivo = $_FILES['foto']['size'];
        $temporal = $_FILES['foto']['tmp_name'];

        //  tamaño máximo (5 MB)
        $tamanioMaximo = 5 * 1024 * 1024; // 2 MB en bytes
        
        // Verifico - imagenes permitidas
        //$extensionesPermitidas = ['image/jpeg', 'image/png', 'image/svg+xml'];

        // Definir la ruta donde se guardará la imagen
        $directorioDestino = '../assets/img/imagenes_subidas/';
        if (!file_exists($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);  // Crea la carpeta si no existe
        }
        //Ruta definitiva - va a la base de datos.
        $rutaArchivoDestino = $directorioDestino . $nombreArchivo;
        // Mover la imagen desde la carpeta temporal a la carpeta de destino
        if (move_uploaded_file($temporal, $rutaArchivoDestino)) {
            echo "La imagen se ha subido exitosamente: <a href='$rutaArchivoDestino'>$nombreArchivo</a>";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "No se ha seleccionado ninguna imagen o ha ocurrido un error en la subida.";
    }
    
    $sql = "INSERT INTO `usuarios`(`id_permiso`, `url_foto_usu`, `username`, `password`, `sexo`) VALUES ('$permiso', '$rutaArchivoDestino', '$usu','$pass','$sexo')";
    mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

?>
    <script>
        window.location.replace("principal_usuarios.php");
    </script>