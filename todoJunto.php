<?php
include_once('funciones.php');
include_once('superficie.php');


function tresCirculos($radio1,$radio2,$radio3){
    $num1=circulo($radio1);
    $num2=circulo($radio2);
    $num3=circulo($radio3);

 return mayor($num1,$num2,$num3);
}

$radio1=2;
$radio2=4;
$radio3=6;

echo tresCirculos($radio1,$radio2,$radio3);

?>