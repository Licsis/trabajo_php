<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  
    <title>Login Principal</title>
</head>
<body>
    <header>
        <h1>LOGIN PRINCIPAL</h1>
    </header>
    <form action="login2.php" method="post">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <input type="text" name="nom_usu" placeholder="Nombre Usuario">
            <input type="password" name="pass" placeholder="Contraseña">
            <input type="submit" value="Acceder">
        </fieldset>
    
        <hr>
        <form action="#" method="post"></form>
            <fieldset>
                <legend>Crear Usuario</legend>
                <a href="register.php" target="_blank" rel="noopener noreferrer">
                <button> Registrarme </button>
            </a> 
            </fieldset>
        </form>
    </form>
</body>
</html>