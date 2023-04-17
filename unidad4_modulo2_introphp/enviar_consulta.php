<?php
$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$email_form = $_POST["email"];
$mensaje_form = $_POST["mensaje"];
$boletin_form= $_POST["boletin"];

//envio de mail
$cuerpo_mail = "Nombre: " . $nombre_form . "\r\n" . "Apellido: " . $apellido_form .  "\r\n" .
    "Email: " . $email_form .  "\r\n" . "Mensaje: " . $mensaje_form. "\r\n" . "boletin: " . $boletin_form;

mail("mariapaulavera@hotmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail);

// $conexion= mysqli_connect("localhost", "root", "", "php_inicial_mpv")
//  or exit ("No se pudo conectar a la base de datos");

$conexion = mysqli_connect("localhost", "id20407624_mariapaulavera", "YOd4Vu<gaAlX/P0z", "id20407624_php_inicial_mpv")
    or exit("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form', '$boletin_form') ");
mysqli_close($conexion);
header("Location: contacto.php?ok");

