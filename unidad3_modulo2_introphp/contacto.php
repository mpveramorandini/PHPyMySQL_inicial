<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="./estilos.css"
</head>
<body>
<header>
<h1><span class="tematika">tematika</span>.com</h1>
    <nav class="botonera_principal">
        <ul>
            <li> <a href="index.php">HOME</a> </li> &nbsp &nbsp
            <li> <a href="tienda.php">TIENDA</a> </li> &nbsp &nbsp
            <li> <a href="contacto.php">CONTACTO</a> </li> 
        </ul>    
    </nav>
    </header>
    <section class="contacto_contenido">
    <form action="enviar_consulta.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text"name="nombre" maxlength="15" minlength="2" required class="contacto_input">

    <label for="apellido">Apellido</label>
    <input type="text"name="apellido" maxlength="15" minlength="2" required class="contacto_input">

    <label for="email">Dirección de email</label>
    <input type="email"name="email" required class="contacto_input">

    <label for="mensaje">Mensaje</label>
    <textarea name="mensaje" class="contacto_input" cols="30" rows="10"></textarea>
    <input type="submit" value="ENVIAR" class="enviar_input">
    </form>
    <?php 
    if (isset($_GET ["ok"])){
        echo "<h3>Su mensaje ha sido enviado con éxito </h3>";
    }
    ?>
    </section>
</body>
</html>