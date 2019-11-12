<?php

 // EJERCICIO 1 a
 function mayor($num1,$num2,$num3){
    return max($num1,$num2,$num3); 
     
}

/* 
$num1=1;
$num2=2;
$num3=3;
mayor($num1,$num2,$num3);


//EJERCICIO b

2.	Definir una función tabla() que reciba un parámetro base, un parámetro límite, 
y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.
  */

/* function tabla($base,$limite){
    foreach (range($base, $limite, 1) as $número) {
        echo $número;
    }
 }

 $base= 1;
 $limite=5;
 tabla($base,$limite);
  */


//ejercicio c


/* function mayor($num1,$num2){
    echo max($num1,$num2,100);  
} */
/* 
$num1=1;
$num2=2;
mayor($num1,$num2);

  */

//ejercicio d



//4.	Modificar tabla para que si recibe un sólo parámetro utilice el número 100.


function tabla($base,$limite=100){
    foreach (range($base, $limite, 1) as $número) {
        echo $número;
    }
 }
/* 
 $base= 1;
 $limite=5;
 tabla($base,$limite);
$base  = 85;
 tabla($base);
  */

?>