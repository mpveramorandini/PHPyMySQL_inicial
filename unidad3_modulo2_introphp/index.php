<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css"
    <title></title>
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
    <?php 
    echo "<h2> Libros para comprar </h2>";
    //comentarios
    // Esto es un comentario
    /* Esto es un comentario 
    multilinea */
    # Esto es un comentario

    //variables
    $Libro1 ="A sangre fria";
    $Autor1= "Truman Capote";
    $cantidad1= 5;
    $precio1= 2520.3;
    $fecha_de_compra1= "10/04/2023"; 

    $Libro2 ="El jugador";
    $Autor2= "Fiodor Dostoievsky";
    $cantidad2= 3;
    $precio2= 1220.3;
    $fecha_de_compra2= "10/03/2023"; 

    $Libro3 ="Fuenteovejuna";
    $Autor3= "Lope de Vega";
    $cantidad3= 2;
    $precio3= 1202.5;
    $fecha_de_compra3= "10/05/2023"; 
    ?>

    <section class= "contenido">
    
    <h2><?php echo $Libro1 ?> </h2>
    <ul>
        <li>Autor: <?php print $Autor1 ?> </li>
        <li>Cantidad: <?php print $cantidad1 ?> </li>
        <li>Precio: <?php print $precio1 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra1?> </li>
    </ul>

    
    <h2><?php echo $Libro2 ?> </h2>
    <ul>
        <li>Autor: <?php print $Autor2 ?> </li>
        <li>Cantidad: <?php print $cantidad2 ?> </li>
        <li>Precio: <?php print $precio2 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra2?> </li>
    </ul>

    <h2><?php echo $Libro3 ?> </h2>
    <ul>
        <li>Autor: <?php print $Autor3 ?> </li>
        <li>Cantidad: <?php print $cantidad3 ?> </li>
        <li>Precio: <?php print $precio3 ?> </li>
        <li>Fecha de compra: <?php print   $fecha_de_compra3?> </li>
    </ul>
    </section>
    <?php 
        $Presupuesto= 50000;
        $Cantidad_total=  $cantidad1 +  $cantidad2 +  $cantidad3 ;
        $Gasto_total =  $precio1* $cantidad1 + $precio2*$cantidad2 + $precio3*$cantidad3 ;
        $Presupuesto_actualizado= $Presupuesto - $Gasto_total  ;
        ?>
    <section class="totales">
       <h2>"Totales"</h2>
       <ul>
        <li> Libros totales: <?php  echo  $Cantidad_total  ?> </li>
        <li> Gasto total: <?php  echo  $Gasto_total   ?> </li>
        <li> Presupuesto actualiado: <?php echo $Presupuesto_actualizado ?> </li>
       </ul>
    </section>

    <section class= "constante">
    <?php 
    define ("SALUDO", "Bienvenido a la Biblioteca");
    echo SALUDO; 
    echo "<br>";
    const BIENVENIDA= "Elejí un libro" ;
    echo BIENVENIDA;
    ?>
    </section>
    
    <section class= "constantes_con_array">
    <?php 
        define ("LIBROS" , array("A sangre fria", "El jugador","Fuenteovejuna" ));
        echo "<br>";
        echo LIBROS [1];

        const LIBROS_NUEVOS= array("Indias Blancas", "La vuelta al mundo en 80 dias","Excursion a los indios ranqueles" );
        echo "<br>";
        echo LIBROS_NUEVOS [2];
    ?>
    </section>    
   
</body>
</html>
