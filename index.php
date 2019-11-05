<?php

//Ejercicios jon snow

/* $persona = [];
$persona["nombre"] = "Jon";
$persona["apellido"] = "Snow";
$persona["edad"] = 27;
$persona["hobbies"] = ["Netflix","Fútbol","Programar"];

echo $persona["edad"];



$persona["edad"] = 25;

echo $persona["edad"];

$persona["direccion"] = "Winterfell";

array_push($persona["hobbies"],"Correr");

print_r( $persona["hobbies"]);
 */
/* 

//CONDICIONALES
//ejercicio 1

$num1=1;
$num2=2;

if($num1>$num2){
    echo ("El número mayor es $num1");

}  else {
    echo ("El número mayor es $num2");    
}
 */

//ejercicio 2

/* $random =rand(1,5);
echo $random;

if ($random == 3 || $random  == 5
) {
    echo $random;
}
 */

 //ejercicio 3

/* $random =rand(1,5);
echo $random;
if ($random == 3) {
    echo $random;
} elseif ($random !=3){
echo "El número NO es 3";
} */

//ejercicio 4
/* $random =rand(1,100);
echo $random;
if ($random >50){
echo "El número es mayor a 50";
} else {
    echo "El número es menor a 50";
} */
// ejercicio 5
/* $nombreDeUsuario = "Lola";
$ContraseniaDeUsuario = "Lola";
if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234"){
    echo "Bienvenido!";
} else {
    echo "Error de credenciales";
} */

//ejercicio 5 -A 


/* $nombreDeUsuario = "admin";
$ContraseniaDeUsuario = "Lola";
if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234"){
    echo "Bienvenido!";
} elseif($nombreDeUsuario == "admin" && $ContraseniaDeUsuario != "1234"){
    echo "Error en la contraseña";
} elseif($nombreDeUsuario != "admin" && $ContraseniaDeUsuario == "1234"){
    echo "Error en el usuario";
}    
elseif($nombreDeUsuario == "" && $ContraseniaDeUsuario == ""){
        echo "Campos vacios";
}
elseif($nombreDeUsuario != "admin" && $ContraseniaDeUsuario != "1234"){
    echo "Error en las credenciales";
} */

//ejercicio 6

/* $edad=20;
$casado=false;
$sexo = "Masculino";

if($edad>18 && $casado==false){
    echo "Bienvenido";
}
var_dump($casado);
var_dump($edad); */

//ejercicio 6 -- a

/* $edad=20;
$casado=false;
$sexo = "Masculino";

if($edad>18 && $casado==false){
    echo "Bienvenido";
}elseif($sexo = "otro"){
    echo "Bienvenido";
}
var_dump($casado);
var_dump($edad);
 */

//ejercicio 7

/* $cantidadDeAlumnos = 0;  
if ($cantidadDeAlumnos) {

    echo “true”;
    
    }
    
    else {
    
    echo “false”;
    
    } */
// ejercicio 8
/* $numero = 10;
if ($numero%2==0){
    echo "el $numero es par";
}else{
    echo "el $numero es impar";
} */

//ejecicio 8 con if ternario
/* $numero = 10;
$respuesta= ($numero%2 ==0) ? "el numero es par" : "el numero es impar";
echo $respuesta;
 */

//ejercicio 9

/* $nota = rand(0,10);
echo $nota;

switch($nota){
    case 1:
    case 2: 
    case 3: 
        echo "desaprobado";
        break;
    case 4:
    case 5:    
       echo "zafamos";
       break;
    case 6:
    case 7:
    case 8:
       echo "BIEN LA COANHFUEAMDRE";
       break;
    case 9:
        echo "veri gud";
        break;
    case 10:
        echo "exelent wachin";
        break;
    default:
        echo "el numero no es valido";
        break;
} */


/* echo '<form method ="post" action="index.php">
<button name="answer" type="submit" value="Yes">Yes</button>
<button name="answer" type="submit" value="No">No</button>
</form>';

switch($_POST['answer'])
{
   case 'Yes':
        echo "It's a goldfish";
        break;
   case 'No':
        echo "It's a eel";
        break;
}
 */


echo '<form method ="post" action="index.php">
Nota: <input type="integer" name="nota">
<input type="submit" name="submit" value="Submit"> 
</form>';

switch($_POST['nota'])
{
   case 1:
    case 2: 
    case 3: 
        echo "desaprobado";
        break;
    case 4:
    case 5:    
       echo "zafamos";
       break;
    case 6:
    case 7:
    case 8:
       echo "BIEN LA COANHFUEAMDRE";
       break;
    case 9:
        echo "veri gud";
        break;
    case 10:
        echo "exelent wachin";
        break;
    default:
        echo "el numero no es valido";
        break;
}

?>