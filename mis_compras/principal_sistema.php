
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/principal.css">
    <!--link rel="stylesheet" href="assets/css/formulario.css"-->
    <link rel="shortcut icon" href="assets/img/shop-solid.svg" type="image/x-icon">
    <title>Sistema Principal</title>
</head>
<body>
<section class="cabecera">
    <div id="home">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path  d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
        </svg>
        <h3><a href="index.php"> Mis Compras</a></h3>
    </div>
    <div id="btn-accesos">
        <button onclick="window.location.href='principal_sistema.php'" class="acceso">Sistemas</button>
        <a href="login.php"><button><img id="login" src="assets/img/right-to-bracket-solid.svg" alt="Login"></button></a>
    </div>
</section>
    
    <section class="table">
        <table>
            <thead>
                <tr>
                    <th>Enlace - Usuarios</th>
                    <th>Enlace - Compras</th>
                    <th>Enlace - En desarrollo</th>
                    <th>Enlace - En desarrollo</th>
                    <th>Enlace - En desarrollo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <a href="abm_usuarios/principal_usuarios.php" rel="noopener noreferrer">Usuarios</a> </td>
                    <td> <a href="abm_compras/principal_compras.php" rel="noopener noreferrer">Compras</a> </td>
                    <td> -- En desarrollo -- </td>
                    <td> -- En desarrollo -- </td>
                    <td> -- En desarrollo -- </td>
                </tr>
            </tbody>
        </table>
    </section>
    <footer class="pie">
        <?php include 'pie.html'; ?>
    </footer>
</body>
</html>