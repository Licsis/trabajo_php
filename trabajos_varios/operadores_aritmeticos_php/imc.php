<?php
    /*
    $peso = 90.89;
    $altura = 1.70;
    if ($peso >= 50 && $altura<= 1.60) {
        echo 'Eres petizo';
    }else {
        echo 'Eres de gran estatura';
    }
        
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="img/file-code-solid.svg" type="image/x-icon">
    <title>IMC</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <section>
            <form class="form-container" action="imc.php" method="post">
                <div class="container">
                    <input type="number" name="peso" step="0.01" placeholder="Ingresa tu peso en Kg"> <br><br>
                    <input type="number" name="altura" step="0.01" placeholder="Ingresa tu altura en metros"> 
                    <br><br>
                    <input type="submit" value="Calcular IMC">
                </div>
            </form>
        </section>
        <section>
            <?php
                if ($_POST) {
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $imc = $peso / ($altura^2);
                    //var_dump($imc);
                    // Formatea el número a 2 decimales
                    $formateado = number_format($imc, 2); 
                    echo'Altura: '.$altura.' | Peso: '.$peso;
                    echo "<BR><hr><BR>";
                    echo "SWITCH CASE";
                    echo"<br>";
                    switch ($imc) {
                        case ($imc < 18.5):
                            echo "Está desnutrido <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        case ($imc >= 18.5 && $imc <= 24.9):
                            echo "Peso Normal <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        case ($imc >= 25.0 && $imc <= 29.9):
                            echo "Tiene Sobrepeso <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        case ($imc >= 30.0 && $imc <= 34.9):
                            echo "Obesidad Tipo I <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        case ($imc >= 35.0 && $imc <= 39.9):
                            echo "Obesidad Tipo II <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        case ($imc >= 40.0):
                            echo "Obesidad patológica extrema <br><br>";
                            echo "El IMC es: ". $formateado;
                            break;
                        default:
                            echo " <h1>Sin Datos</h1> ";
                            break;
                    }
                    echo "<BR><BR><hr><BR>";
                    echo "IF ANIDADOS";
                    echo "<br>";
                    if ($imc < 18.5 ) {
                        echo "Está desnutrido <br><br>";
                        echo "El IMC es: ". $formateado;
                    }elseif ($imc >= 18.5 && $imc <= 24.9) {
                        echo "Peso Normal <br><br>";
                        echo "El IMC es: ". $formateado;
                    }elseif ($imc >= 25.0 && $imc <= 29.9) {
                        echo "Tiene Sobrepeso <br><br>";
                        echo "El IMC es: ". $formateado;
                    } elseif ($imc >= 30.0 && $imc <= 34.9) {
                        echo "Obesidad Tipo I <br><br>";
                        echo "El IMC es: ". $formateado;
                    }elseif ($imc >= 35.0 && $imc <= 39.9) {
                        echo "Obesidad Tipo II <br><br>";
                        echo "El IMC es: ". $formateado;
                    }elseif ($imc >= 40.0) {
                        echo "Obesidad patológica extrema <br><br>";
                        echo "El IMC es: ". $formateado;
                    } else {
                        echo " <h1>Sin Datos</h1> ";
                    }
                }
            ?>
        </section>  
    </div>  
</body>
</html>