<?php 
$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$email_form = $_POST["email"];
$mensaje_form = $_POST["mensaje"];

$conexion= mysqli_connect("localhost", "root", "", "php_inicial_mpv") or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form') ") ;
mysqli_close($conexion);
header("Location: contacto.php?ok");
