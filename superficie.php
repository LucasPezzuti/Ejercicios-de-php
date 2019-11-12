<?php
//ejercicio 2 a
 function triangulo($base,$altura){
    echo ($base*$altura)/2;
}

/* $base= 2;
$altura=4;
triangulo($base,$altura);
  */

//ejercicio 2 b

 function rectangulo($base,$altura){
    echo $base*$altura;
}

/* $base= 2;
$altura=4;
rectangulo($base,$altura);
 */

 

 //ejercicio 2 c

  function cuadrado($base){
    echo $base*$base;
}
/* 
$base= 2;
cuadrado($base); */



 
//ejercicio d

 function circulo($radio){
    $pi=pi();

    $superficie=$pi*($radio*$radio);
    return $superficie;
}

/* $radio=2;
circulo($radio);
  */

?>