<?php
//$ip = $_SERVER['REMOTE_ADDR'];  // Obtiene la IP pública del usuario
$ip = file_get_contents('https://api.ipify.org');
//$ip = '131.108.140.116';
$access_token = '60f84bdf8215ed';  // Reemplaza con tu token de acceso si usas una versión de pago
$api_url = "https://ipinfo.io/{$ip}?token={$access_token}";

$response = @file_get_contents($api_url);
if ($response === FALSE) {
    die('Error al intentar obtener la ubicación');
}
$data = json_decode($response, true);

$location = 'Ciudad: '.$data['city'] . '<br>Region: ' . $data['region'] . '<br>País: ' . $data['country'].'<br> ISP: '. $data['org'].'<br> Código Postal: '. $data['postal'].'<br> Zona Horaria: '. $data['timezone'];
$coordinates = $data['loc'];  // Latitud y Longitud



echo "<h3> Ubicación del usuario:</h3> <br> " . $location . "<br>";
echo "<br> Coordenadas: " . $coordinates;
echo "<br> IP Pública: ". $ip."<br><br>";


//var_dump($data);