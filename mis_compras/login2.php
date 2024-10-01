<?php
    include "conexion.php";

    /* Verifica que ambos valores fueron enviados por el formulario antes de intentar usarlos */
    if (isset($_POST['usuario']) && isset($_POST['pass'])) {
        // con trim Elimino espacios en blanco innecesarios al principio y al final de las entradas.
        $usu = trim($_POST['usuario']);
        $pass = trim($_POST['pass']);


    
        // Escapa cualquier carácter especial que pueda ser utilizado para inyección SQL, asegurando que el código sea más seguro.
        $usu = mysqli_real_escape_string($conexion, $usu);
        $pass = mysqli_real_escape_string($conexion, $pass);
    ?>
        <script>
            window.location.replace("principal_sistema.php");
        </script>

    <?php
    

    } else {
        // Manejar el caso donde no se recibieron los datos esperados
        echo "Usuario y/o contraseña no enviados.";
    }
?>