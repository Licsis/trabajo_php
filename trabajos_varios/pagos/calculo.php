<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculo de precios</title>
</head>
<body>
<?php
// Verifica si el formulario ha sido enviado y no está vacío
if (!empty($_POST)) {
    // Capturo y almaceno las horas ingresadas por el usuario mediante la clave "horas"
    $horas = $_POST["horas"];
    // Defino e inicializo la variable horasBase como entero
    $horaBase = 40;
    // Defino e inicializo la variable monto como real
    $monto = 5500.00;
    
    // Verifica si las horas ingresadas son menores o iguales a 40
    if ($horas <= $horaBase && $horas <> "" ) {
        // Doy formato al monto de pago base con la función number_format
        $formateado1 = number_format($monto, 2, ',', '.');
        echo "<h1>Trabajó " . $horas . " horas y recibirá: $" . $formateado1 . "</h1>";
        echo "<br>";
        ?>
            <div class="enlace">
                <a href="index.php" rel="noopener noreferrer">Volver Página</a>
            </div>
        <?php
    }
    // Si las horas ingresadas son superiores a 40
    elseif ($horas > $horaBase) {
        // Calculo las horas extra trabajadas restando las horas base (40 horas)
        $nueva_hora = $horas - $horaBase;
        
        // Calculo el monto a recibir en base a las horas extra trabajadas
        // Multiplico $nueva_hora por sí mismo, y luego por la suma del 50% del monto más el monto original
        $montoExtra = $nueva_hora * ($nueva_hora * (($monto * 0.5) + $monto));
        
        // Doy formato al monto de horas extra con la función number_format
        $formateado2 = number_format($montoExtra, 2, ',', '.');
        echo "<h1>Trabajó " . $horas . " horas y recibirá: $" . $formateado2 . "</h1>";
    }
    // Si el usuario no ingresó horas, muestra un mensaje de error y redirecciona después de 5 segundos
    elseif ($horas == "") {
        $tiempoRedireccion = 11; // Tiempo en segundos antes de redireccionar
        echo"<h3>En <span id='countdown'>$tiempoRedireccion</span> segundos será redireccionado</h3> ";
        echo "<h1>No ingresó un valor numérico.</h1>";
        ?>
        <!-- Script para actualizar dinámicamente el conteo regresivo y redirigir automáticamente a index.php después de ciertos segundos -->
        <script>
            // Función para actualizar dinámicamente el contador regresivo
            function updateCountdown() {
                var countdownElement = document.getElementById('countdown');
                var seconds = parseInt(countdownElement.innerHTML);
                seconds--;
                countdownElement.innerHTML = seconds;
                if (seconds <= 0) {
                    window.location.replace("index.php");
                } else {
                    setTimeout(updateCountdown, 1000); // Llama a la función cada segundo (1000 milisegundos)
                }
            }
            // Inicia la función de conteo regresivo al cargar la página
            updateCountdown();
        </script>
        <?php
    }
}
?>


</body>
</html>