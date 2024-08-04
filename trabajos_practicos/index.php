<?
// El sistema requiere ingresar la edad del usuario, verificar si es mayor de edad y mostrar por pantalla la siguente leyenda: es mayor de edad, de lo contrario es menor de edad, teniendo en cuenta que la mayoría de edad es cuando tiene 18 o más años.

//En base al ejercicio anterior, incorporar lo siguiente, si es mayor de edad y tiene la estatura menor o igual a 170 centímetros, mostrar por pantalla el siguiente mensaje "Puede ingresar a la montaña rusa", de lo contrario "No puede ingresar"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios1</title>
</head>
<body>
   <form action="index.php" method="post">
        <input type="number" name="edad" placeholder="ingresar edad">
        <input type="submit" value="verificar">
        <input type="number" name="altura" placeholder="ingresar altura">
   </form>
   <?php
   if (isset($_POST)) {
        $edad = $_POST['edad'];
        if ($edad >=18) {
            echo'sos mayor de edad';
        }else {
            echo'no sos mayor de edad';
        }
    }
    if (isset($_POST)) {
        $name = $_POST ['altura'];
        if ($name >= 1.70) {
            echo 'podes ingresar';
        }else {
            echo'no podes ingresar';
        }
    }
   
   ?> 
</body>
</html>