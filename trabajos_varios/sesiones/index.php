<?php
    session_start(); // Inicia la sesión
    // Variable de Sesion
    $_SESSION['username'] = 'juanperez';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Bienvenida</title>
</head>
<body>
    <h1>Bienvenido a la página</h1>
    <p>
        <?php
        // Mostrar el nombre de usuario desde la sesión
        if (isset($_SESSION['username'])) {
            echo 'Hola, ' . $_SESSION['username'];
        } else {
            echo 'Hola, invitado';
        }
        ?>
    </p>
</body>
</html>


