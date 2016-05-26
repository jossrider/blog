<?php
// recibo las variables del formulario
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];


// te muestro las variales
echo "El mensaje que enviaste es: ";
echo "<br>";
echo $mensaje;
echo $nombre;
echo $mail;


?>
    