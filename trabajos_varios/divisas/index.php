<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="img/file-code-solid.svg" type="image/x-icon">
    <title>Calcular Divisas</title>
    <style>
        .formato_texto{
            color: orange;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
        }
        p{
            color: red;
            font-size: 25px;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    </style>
</head>
<body>
    <!--
        CONSIGNA: Desarrolla un programa que tome un monto en pesos y lo convierta a diferentes divisas. El usuario debe poder elegir entre dólares($1250), euros($968,49), libras esterlinas($1146,28), reales brasileños($166,38) y coronas suecas($85,94). Si el usuario elige “todas”, el programa debe mostrar la conversión en todas las divisas mencionadas. Asegúrate de manejar cualquier entrada incorrecta con un mensaje adecuado. 
    -->
    <div class="container">
        <section>
                <fieldset>
                    <legend>Tabla de comparaciones - Divisas</legend>
                    <h3>1 Dolar = $1250 Pesos Argentinos</h3>
                    <h3>1 Euro = $968,49 Pesos Argentinos</h3>
                    <h3>1 Libra Esterlina = $1146,28 Pesos Argentinos</h3>
                    <h3>1 Real = $166,38 Pesos Argentinos</h3>
                    <h3>1 Corana Sueca = $85,94 Pesos Argentinos</h3>                    
                </fieldset>
                <br>
            <form action="index.php" method="post">
                <input type="number" name="divisa" step="0.01" placeholder="Digitá tu monto en Pesos Argentinos">
                <select name="opcion" id="">
                    <option value="" selected>-- Divisas --</option>
                    <option value="Dolar">Dolar</option>
                    <option value="Euros">Euros</option>
                    <option value="Libras Esterlinas">Libras Esterlinas</option>
                    <option value="Reales">Reales</option>
                    <option value="Corona Sueca">Corona Sueca</option>
                    <option value="Todas">Todas</option>
                </select>
                <input type="submit" value="Calular Divisa">
            </form>

        </section>
        <section class="formato_texto fecha md_style">
            <?php 
                if (!empty($_POST)) {
                    $monto = $_POST["divisa"];
                    $opción = $_POST["opcion"];
                    switch ($opción) {
                        case 'Dolar':
                            $result1 = $monto / 1250;
                            echo ' El monto total adquirido es de: '. number_format($result1, 2) .' Dolares ';
                            break;
                        case 'Euros':
                            $result1 = $monto / 968.49;
                            echo 'El monto total adquirido es de: '. number_format($result1, 2) .' Euros';
                            break;
                        case 'Libras Esterlinas':
                            $result1 = $monto / 1146.28;
                            echo 'El monto total adquirido es de: '. number_format($result1, 2) .' Libras Esterlinas';
                            break;
                        case 'Reales':
                            $result1 = $monto / 166.38;
                            echo 'El monto total adquirido es de: '. number_format($result1, 2) .' Reales';
                            break;
                        case 'Corona Sueca':
                            $result1 = $monto / 85.94;
                            echo 'El monto total adquirido es de: '. number_format($result1, 2) .' Coronas Suecas';
                            break;
                        case 'Todas':
                            $result1 = $monto / 85.94;
                            echo 'El monto total adquirido es de: '. number_format($result1, 2) .' Coronas Suecas <br><br>';
                            $result2 = $monto / 1250;
                            echo '<p> El monto total adquirido es de: '. number_format($result2, 2) .' Dolares</p> <br><br>';
                            $result3 = $monto / 968.49;
                            echo 'El monto total adquirido es de: '. number_format($result3, 2) .' Euros <br><br>';
                            $result4 = $monto / 1146.28;
                            echo 'El monto total adquirido es de: '. number_format($result4, 2) .' Libras Esterlinas <br><br>';
                            $result5 = $monto / 166.38;
                            echo 'El monto total adquirido es de: '. number_format($result5, 2) .' Reales <br><br>';


                            break;
                            
                        default:
                            echo'Opción Incorrecta';
                            break;
                    }

            }
            
            ?>
        </section>        
    </div>
</body>
</html>