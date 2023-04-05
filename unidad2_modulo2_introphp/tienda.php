<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estiloss.css"
</head>
<body>
    <header>
    <nav class="botonera_principal">
        <ul>
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="tienda.php">Tienda</a> </li>
        </ul>    
    </nav>
    </header>
    
    <section class="tienda_contenido">
        <h2>Libros</h2>
        <ul>
            <li> <a href="tienda.php?titulo=asf">A Sangre Fria </a> </li>
            <li> <a href="tienda.php?titulo=ej">El jugador </a> </li>
            <li> <a href="tienda.php?titulo=fo">Fuenteovejuna </a> </li>
        </ul>
    </section>
    <?php   $titulo ="";
            $autor= "";
            $precio= "" ;
            $img ;
     ?>
 
    <?php  
    if (isset ($_GET["titulo"])){
        switch($_GET["titulo"]){
            case "asf":
                $titulo ="A sangre fria";
                $autor= "Truman Capote";
                $precio= 2520.3;
                $img="./img/aSangreFria.jpg";
                break;

            case  "ej":
                $titulo ="El Jugador";
                $autor=  "Fiodor Dostoievsky";
                $precio= 1220.3;
                $img="./img/elJugador.jpg";
                break;
              
            case  "fo":
                    $titulo ="Fuenteovejuna";
                    $autor=  "Lope de Vega";
                    $precio= 1202.5;
                    $img="./img/fuenteOvejuna.jpg";
                    break;   
            }    
        }
    ?>
  <div class="libro_descripcion">
   <h2> <?php echo $titulo;?></h2>
   <h3> <?php echo $autor;?></h3>
   <h4> <?php echo $precio;?></h4>
    <div class="contenedor_img">
        <img src="<?php echo $img ?>" alt="">
    </div>
    </div>

<br>
<h2>Libros nuevos</h2>
<?php 
$Libros_nuevos = array ("Excursion a los indios ranqueles", "El principito", "Mujercitas", "Crimen y castigo");
for ($i=0; $i< count ($Libros_nuevos); $i++){
    echo $Libros_nuevos[$i] . "<br>";
}
?>
<br>
<h2>Libros cortos</h2>
<?php 
$Libros_cortos = array (
    array ("Titulo" => "Mujercitas", "paginas" => 141),
    array ("Titulo" => "Orgullo y Prejuicio", "paginas" => 415),
    array ("Titulo" => "El Padrino", "paginas" => 516),
    array ("Titulo" => "La vuelta al mundo en 80 dias", "paginas" => 221)
);

for($i=0; $i< count($Libros_cortos); $i++){
    echo "Titulo: ". $Libros_cortos[$i] ["Titulo"] . "<br>";
    echo "paginas: ". $Libros_cortos[$i] ["paginas"] . "<br>";

    if($Libros_cortos[$i] ["paginas"]<=250){
        echo "El libro es corto <br><br>";
    }else {
        echo "El libro es largo<br><br>";
    }
}
?>

</body>

</html>