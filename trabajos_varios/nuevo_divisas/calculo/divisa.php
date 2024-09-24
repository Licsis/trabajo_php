<?php
    $valor = $_POST['valor1'];
    $divisa = $_POST['divisa'];

    switch ($divisa){
        case 0:
            echo "Debe selecionar una opción";

            break;
        case 1:
            echo "Ingresó: $".$valor."<br><br>";
                $dolar = $valor / 1281.20;
                $dolar_redondeado = round($dolar, 2);
                echo  "Su valor en Dolares sin redondeo es: $". $dolar."<br><br>";
                echo  "Su valor en Dolares con redondeo es: $".$dolar_redondeado;
            break;
        case 2:
            echo "Ingresó: $".$valor."<br><br>";
            $dolar = $valor / 735.45;
            $dolar_redondeado = round($dolar, 2);
            echo  "Su valor en Dolares sin redondeo es: $". $dolar."<br><br>";
            echo  "Su valor en Dolares con redondeo es: $".$dolar_redondeado;
            
            
            break;
        case 3:
            echo "Debe selecionar una opción";
            break;
        case 4:
            echo "Debe selecionar una opción";
            break;
    }
       