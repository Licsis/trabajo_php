<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Tabla de Multiplicar</title>
</head>
<body>
<div class="container">
    <section>  
        <br>
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Digitá el número para obtener su tabla de multimplicar">
            <input type="submit" value="Obtener Tabla">
        </form>
    </section>
    <section class="formato_texto fecha md_style">
        <?php
        //El sistema requiere ingresar la edad del usuario, verificar si es mayor de edad y mostrar por pantalla la siguente leyenda: es mayor de edad, de lo contrario es menor de edad, teniendo en cuenta que la mayoría de edad es cuando tiene 18 o más años.

        //En base al ejercicio anterior, incorporar lo siguiente, si es mayor de edad y tiene la estatura menor o igual a 170 centímetros, mostrar por pantalla el siguiente mensaje "Puede ingresar a la montaña rusa", de lo contrario "No puede ingresar". 

        //Se necesita que el usuario ingrese su salario, nombre y años trabajando en una empresa, se desea mostrar sus datos por pantalla con el siguiente formato ->  "El Señor NOMBRE, Cuenta con un salarido de: SALARIO; y lleva trabajando para nosotros AÑOS_TRABAJADOS Años".
        if (!empty($_POST)) {
            $valor = $_POST['num1'];
            for ($i=1; $i <= 10; $i++) { 
                echo''. $valor .'*'. $i ." = ".$i*$valor. "<br><br>";
            }
        }
        ?>
    </section>
    <script src="js/script.js"></script>
    </div>
</body>
</html>
