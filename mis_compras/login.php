<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/principal.css">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link rel="shortcut icon" href="assets/img/shop-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/pie.css">
    <title>Login</title>
</head>
<body>
    <?php include 'cabecera.html';?>
    <form action="login2.php" method="post" class="formulario">
        <fieldset>
            <legend>
                Acceder
            </legend>
            <div class="flex-form">
                <input type="text" name="usuario" placeholder="Nombre Usuario">
                <input type="password" name="pass" placeholder="Contraseña">
                <input type="submit" value="Ingresar" id="btn-formulario">
            </div>
           
        </fieldset>
    </form>
    <footer class="pie">
        <?php include 'pie.html'; ?>
    </footer>
</body>
</html>