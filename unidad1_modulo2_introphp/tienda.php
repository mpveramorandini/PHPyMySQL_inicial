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
    <div class="libro descripcion">
   <h2>Titulo:<?php echo $titulo ?> </h2>
   <h3>Autor: <?php echo $autor; ?></h3>
   <h4>Precio: <?php echo $precio; ?></h4>
    <div class="contenedor_img">
        <img src="<?php echo $img ?>" alt="">
    </div>
    </div>

</body>
</html>