<?php
include("header.php")
?>
<section class="constante">
    <h4>
        <?php
        define("SALUDO", "Bienvenido!!");
        echo SALUDO;
        echo "<br>";
        const BIENVENIDA = "elejí tu libro";
        echo BIENVENIDA;
        ?>

    </h4>
</section>


<section class="constantes_con_array">
    <h4 class="libros_nuevos">LIBROS NUEVOS</h4>
    <?php
    define("LIBROS", array("A sangre fria", "El jugador", "Fuenteovejuna"));
    echo "<br>";
    echo LIBROS[1];

    const LIBROS_NUEVOS = array("Indias Blancas", "La vuelta al mundo en 80 dias", "Excursion a los indios ranqueles");
    echo "<br>";
    echo LIBROS_NUEVOS[2];
    echo "<br>";
    echo LIBROS_NUEVOS[0];
    echo "<br>";
    $cantidad = count(LIBROS_NUEVOS);
    echo "<br>";
    echo ("La cantidad de artículos nuevos son: " . $cantidad); /*practicando count*/
    ?>
</section>
<br>


<div class="libro_mujercitas">
    <?php
    $Mujercitas = array("Mujercitas", "Louisa May Alcott",  3520);
    list($titulo, $autor, $precio) = $Mujercitas;
    echo "El título $titulo ( $autor) está de oferta $ $precio. "
    ?>
</div>
<h4 class="libros_destacados"> DESTACADOS</h4>

<?php
//comentarios
// Esto es un comentario
/* Esto es un comentario 
    multilinea */
# Esto es un comentario

//variables
$Libro1 = "A sangre fria";
$Autor1 = "Truman Capote";
$cantidad1 = 89;
$precio1 = 2520.3;
$fecha_de_compra1 = "10/04/2023";

$Libro2 = "El jugador";
$Autor2 = "Fiodor Dostoievsky";
$cantidad2 = 65;
$precio2 = 1220.3;
$fecha_de_compra2 = "10/03/2023";

$Libro3 = "Fuenteovejuna";
$Autor3 = "Lope de Vega";
$cantidad3 = 21;
$precio3 = 1202.5;
$fecha_de_compra3 = "10/05/2023";
?>

<section class="contenido">

    <h4><?php echo $Libro1 ?> </h4>
    <ul>
        <li>Autor: <?php print $Autor1 ?> </li>
        <li>Cantidad: <?php print $cantidad1 ?> </li>
        <li>Precio: <?php print "$ " . $precio1 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra1 ?> </li>
    </ul>


    <h4><?php echo $Libro2 ?> </h4>
    <ul>
        <li>Autor: <?php print $Autor2 ?> </li>
        <li>Cantidad: <?php print $cantidad2 ?> </li>
        <li>Precio: <?php print "$ " . $precio2 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra2 ?> </li>
    </ul>

    <h4><?php echo $Libro3 ?> </h4>
    <ul>
        <li>Autor: <?php print $Autor3 ?> </li>
        <li>Cantidad: <?php print $cantidad3 ?> </li>
        <li>Precio: <?php print "$ " . $precio3 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra3 ?> </li>
    </ul>
</section>
<?php
$Presupuesto = 500000;
$Cantidad_total =  $cantidad1 +  $cantidad2 +  $cantidad3;
$Gasto_total =  $precio1 * $cantidad1 + $precio2 * $cantidad2 + $precio3 * $cantidad3;
$Presupuesto_actualizado = $Presupuesto - $Gasto_total;
?>
<section class="totales">
    <h4>"Totales"</h4>
    <ul>
        <li> Libros totales: <?php echo  $Cantidad_total  ?> </li>
        <li> Gasto total: <?php echo  $Gasto_total   ?> </li>
        <li> Presupuesto actualiado: <?php echo $Presupuesto_actualizado ?> </li>
    </ul>
</section> <br>


<h4 class="saldos">SALDOS</h4>
<?php
function libros()
{
    return
        array("Mujercitas", "Orgullo y Prejuicio", "El Padrino", "La vuelta al mundo en 80 dias", "Excursion a los indios ranqueles");
}
list($Mujercitas, $Orgullo_y_Prejuicio, $El_Padrino, $La_vuelta_al_mundo_en_80_dias, $Excursion_a_los_indios_ranqueles) = libros();
echo ($Mujercitas);
echo ("<br>" . $Orgullo_y_Prejuicio);
echo ("<br>" . $El_Padrino);
echo ("<br>" . $La_vuelta_al_mundo_en_80_dias);
echo ("<br>" . $Excursion_a_los_indios_ranqueles);

echo "<br>";
echo "<hr>";

?>


<?php echo "<br>";
include("footer.php") // practicando 
?>
</body>

</html>