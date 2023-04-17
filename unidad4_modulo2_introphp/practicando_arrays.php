<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
// inicializacion del vector
// $dia[0] = "domingo";
// $dia[1] = "lunes";
// $dia[2] = "martes";
// $dia[3] = "miércoles";
// $dia[4] = "jueves";
// $dia[5] = "viernes";
// $dia[6] = "sábado";
// // impresion del vector
// for($i=0; $i<7; $i++){
// echo ($dia[$i] . "<br/>") ;
// }

// $articulos =array("lápiz","goma","hoja","tinta");
// // impresion del vector
// $cantidad = count($articulos);
// echo ("la cantidad de artículos son: " . $cantidad);

// inicialización del vector
// $nombre[10] = "marcelo";
// $nombre[20] = "alicia";
// $nombre[15] = "alejandra";
// $nombre[35] = "mario";
// $nombre[12] = "alberto";
// // impresión del vector
// reset($nombre);
// echo ("<h2>" . "vector de nombres"."</h2>");
// do{
// // buscar posición especificada
// $i = key($nombre);
// // buscar contenido en esa posición
// $valor = current($nombre);
// echo ("posición: " . $i . " ‐ ");
// echo ("contenido: " . $valor);
// echo ("<br>");
// } while (next($nombre));


// $v[0] = 'PHP';
// $v[1] = 'estamos';
// $v[2] = 'aprendiendo, paso a paso';
// $size = count($v);
// for($i=0;$i<$size;$i++){
// echo $v[$i].' ';
// }
// 

// $v[0] = 'PHP';
// $v[1] = 'estamos';
// $v[3] = 'aprendiendo, paso a paso';
// $size = count($v);
// reset($v);
// for($i=0;$i<$size;$i++){
// $j = key($v);
// echo $v[$j].' ';
// next($v);
// }

// inicialización del vector


// function agregar(&$string) { /* Paso por referencia el parámetro.

// Los cambios también se verán reflejados fuera de la función*/

// $string .= ' y algo más.';

// }

// $str = 'Esto es una cadena, ';

// agregar($str);

// echo $str; // Escribe 'Esto es una cadena, y algo más.'

// function agregar($string) {// Paso por valor del parámetro.

//     $string .= ' y algo más.';
    
//     }
    
//     $str = 'Esto es una cadena, ';
    
//     agregar($str);
    
//     echo $str."<br/>"; // Escribe 'Esto es una cadena, '
    
//     function agregarporreferencia(&$str){// Paso por referencia del parámetro.
    
//     $str .= ' y algo más.';
    
//     }
    
//     agregarporreferencia($str);
    
//     echo($str);// Escribe 'Esto es una cadena, y algo más.'

// function cafe($tipo="cappucino") {
//     /*El valor por defecto del parámetro $tipo es cappucino*/
    
//     return "Haciendo una taza de $tipo.<br>";
    
//     }
    
//     echo cafe();
    
//     /*Llamada a la función sin parámetro. El parámetro tomará su valor por defecto: cappucino*/
    
//     echo cafe("espresso");//El parámetro tomará el valor espresso
function cafe($temp,$tipo="con leche") {

    return "Haciendo café $tipo $temp.<br>";
    
    }
    
    echo cafe("caliente"); //Escribe: 'Haciendo café con leche caliente'
?> 

</body>
</html>