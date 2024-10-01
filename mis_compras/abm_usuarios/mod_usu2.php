
<?php
    include "../conexion.php";
    $identificador = $_REQUEST['identificador'];
    $permiso = $_REQUEST['permiso'];
    $usuario = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];
    $sexo = $_REQUEST['sexo'];


    //var_dump($identificador);
    $query = "UPDATE `usuarios` SET `id_permiso`='$permiso',`username`='$usuario',`password`='$pass',`sexo`='$sexo' WHERE estado_usu = 1 AND id_usu = $identificador";

    mysqli_query($conexion,$query);
?>
<script >
    window.location.replace("principal_usuarios.php");
</script>