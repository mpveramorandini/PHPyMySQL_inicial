<?php
include("header.php")
?>

<section class="tienda_contenido">
    <h3 class="recomendados">RECOMENDADOS</h3> <br>
    <ul class="libros_recomedados">
        <li> <a href="tienda.php?titulo=asf">A Sangre Fria </a> </li>
        <li> <a href="tienda.php?titulo=ej">El jugador </a> </li>
        <li> <a href="tienda.php?titulo=fo">Fuenteovejuna </a> </li>
    </ul>
    <br>
</section>
<?php $titulo = "";
$autor = "";
$precio = "";
$img;
?>

<?php
if (isset($_GET["titulo"])) {
    switch ($_GET["titulo"]) {
        case "asf":
            $titulo = "A sangre fria";
            $autor = "Truman Capote";
            $precio =  "$" . 2520.3;
            $img = "./img/aSangreFria.jpg";
            break;

        case  "ej":
            $titulo = "El Jugador";
            $autor =  "Fiodor Dostoievsky";
            $precio = "$" . 1220.3;
            $img = "./img/elJugador.jpg";
            break;

        case  "fo":
            $titulo = "Fuenteovejuna";
            $autor =  "Lope de Vega";
            $precio = "$" . 1202.5;
            $img = "./img/fuenteOvejuna.jpg";
            break;
    }
}
?>
<div class="libro_descripcion">

    <div class="contenedor_img">
        <img src="<?php echo $img ?>" alt="">
    </div>
    <h4 class="titulo_descripcion"> <?php echo $titulo; ?></h4>
    <h4 class="autor_descripcion"> <?php echo $autor; ?></h4>
    <h4 class="precio_descripcion"> <?php echo $precio; ?></h4>

</div>

<div class="contenedor">
    <div class="destacados_del_mes">
        <h4>destacados del mes</h4>
    </div><br>
    <br>
    <div class="nuevosingresos">
        <h3 class="nuevos_ingresos">NUEVOS INGRESOS</h3><br>
        <?php
        $Libros_nuevos = array("Excursion a los indios ranqueles", "El principito", "Mujercitas", "Crimen y castigo", "El Nudo");
        for ($i = 0; $i < count($Libros_nuevos); $i++) {
            echo $Libros_nuevos[$i] . "<br>";
        }
        ?>
    </div>
</div>
<br>
<h3 class="destacados">SALDOS</h3> <br>
<?php
$Mas_vendidos = 0;
$oferta = 0;
$Saldos = array(
    array("Titulo" => "Mujercitas", "ejemplares" => 141),
    array("Titulo" => "Orgullo y Prejuicio", "ejemplares" => 115),
    array("Titulo" => "El Padrino", "ejemplares" => 516),
    array("Titulo" => "La vuelta al mundo en 80 dias", "ejemplares" => 221),
    array("Titulo" => "Excursion a los indios ranqueles", "ejemplares" => 171),
    array("Titulo" => "El principito", "ejemplares" => 815),
    array("Titulo" => "Mujercitas", "ejemplares" => 316),
    array("Titulo" => "El Jugador", "ejemplares" => 121)
);



//imprimir titulo y evaluamos si son mas de 150 ejemplares
for ($i = 0; $i < count($Saldos); $i++) {
    echo "Titulo: " . $Saldos[$i]["Titulo"] . "<br>";
    //echo "Ejemplares vendidos: ". $Saldos[$i] ["ejemplares"] . "<br>";
    if ($Saldos[$i]["ejemplares"] >= 150) {
        echo "Destacado <br><br>";
    } else {
        echo "Oferta <br><br>";
    }
}



?>
<?php
include("footer.php") // practicando  
?>
</body>

</html>