<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Ejercicios</title>
</head>
<body>
    <div class="container">
        <section>
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Tus Datos</legend>
                    <input type="text" name="nom_usuario">
                    <input type="number" name="salario">            
                    <input type="number" name="anio">
                    <input type="submit" value="Mensaje">                    
                </fieldset>
            </form>
        </section>
        <section>
            <h1>Se visualizarán los datos</h1>
        </section>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>