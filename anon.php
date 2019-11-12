<?php
$nombre="lola";
$apellido="zia";

$ejemplo = function ($nombre) use ($apellido){  //APELLIDO ES GLOBAL ; NO LO PASO POR PARAMETRO.
    // SE USA PARA GENERAR UN LOG AFUERA DE LA FUNCION O TOMAR VARIABLES CON LAS Q NECESITAMOS HACER CALCULOS.
    return $nombre . '' . $apellido;

};

echo '<br>'.$ejemplo($nombre).'<br>';

function sumar($num1,$num2)
{
    return $num1 + $num2;
}

$fx= 'sumar';
$suma= $fx(3,4);
echo "la suma de los numeros 3 y 4 da $suma"

?>