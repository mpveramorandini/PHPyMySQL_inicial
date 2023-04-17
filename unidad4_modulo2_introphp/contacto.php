<?php
include("header.php")
?>
<section class="contacto_contenido">
    <form action="enviar_consulta.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" maxlength="15" minlength="2" required class="contacto_input">

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" maxlength="15" minlength="2" required class="contacto_input">

        <label for="email">Dirección de email</label>
        <input type="email" name="email" required class="contacto_input">

        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" class="contacto_input" cols="30" rows="10"></textarea>

        <input type="checkbox" name="boletin" value="boletin">
        <label for="boletin">Adherirse al boletín de novedades</label> <br> <br>

        <input type="submit" value="ENVIAR" class="enviar_input">
    </form>
    <?php
    if (isset($_GET["ok"])) {
        echo "<h5>Su mensaje ha sido enviado con éxito </h5>";
    }
    ?>
</section>
<?php
include("footer.php") // practicando  
?>

</body>

</html>