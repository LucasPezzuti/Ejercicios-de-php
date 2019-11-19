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


/* echo '<form method ="post" action="index.php">
Nota: <input type="integer" name="nota">
<input type="submit" name="submit" value="Submit"> 
</form>';
if(isset($_POST['nota'])){

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
}
 */


// CLASE 07/11

//EJERCICIO 1

/*   $limite=20;
  $numero=2;
  for($i=0;$i<=$limite;$i++){
      if($i%$numero==0){
      echo $i." es múltiplo de ".$numero;
      echo '<br />';
      }
  }
 */

  //EJERCICIO 2

/*   $numero=100;
  while($numero>=85){
      echo $numero;
      $numero--;
      echo '<br />';
  } */

  //EJERCICIO 3

/*   $contador=1;
  
  while($contador<=5){
    echo $contador*2;
    $contador++;
    echo '<br />';
  } */

  //EJERCICIO 4

/* $contador=0;
$contador1=0;
 while($contador<5){
    $numero= rand(0,1);
    if($numero==1){
    $contador++;
    $contador1++;
    } else {
       $contador1++; 
    }
    
  }
  
  if ($contador=5){
    echo "Tomó ".$contador1." intentos para sacar 5 caras ";
  } */

//EJERCICIO 5.a
/* 
$nombres=["Lola","greta","pampa","Parana","Bambi"];
for($i=0;$i<(count($nombres));$i++){
  echo $nombres[$i];
  echo '<br />';


} */

//EJERCICIO 5.b

/* $nombres=["Lola","greta","pampa","Parana","Bambi"];
$contador = (count($nombres));
$numero=0;
  while($numero<$contador){
    echo $nombres[$numero];
    $numero++;
    echo '<br />';
}
 */


 //EJERCICIO 5.c

/* $nombres=["Lola","greta","pampa","Parana","Bambi"];
$contador = (count($nombres));
$numero=0;
  do{
  echo $nombres[$numero];
  $numero++;
  echo '<br />';
}
  while($numero<$contador)
 */


//EJERCICIO 5.d

/* $nombres=["Lola","greta","pampa","Parana","Bambi"];

  foreach ($nombres as $lolas) {
    echo $lolas;
    $lolas = $lolas++;
    echo '<br />';
  }
 */

//EJERCICIO 6

/* $numeros=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];

foreach ($numeros as $n) {
    if ($n==5){
        echo "Se encontró un 5!";
        exit;
    } else {
    echo $n;
    $n = $n++;
    echo '<br />';
  }
}
 */



 //EJERCICIO 7
/* 
 $numeros=[rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
 $contador=0;

 foreach ($numeros as $n) {
    if ($n%2==0){
        $contador++;
        $n++;
    } else {
    $n++;
    }
}
echo $contador;
 */

 //EJERCICIO 8
/* 
$mascota = [
    "animal" => "perro",
    "edad" => 5,
    "altura" => "2 metros",
    "nombre" => "Lola"
];

foreach ($mascota as $lolas => $value) {
    echo "$lolas:$value <br>";
    $lolas = $lolas++;
  } */


  //EJERCICIO 9
/* 
  $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;


  foreach ($ceu as $c => $value) {
    echo "$c:$value <br>";
    $c = $c++;
  } 
 */

 //EJERCICIO 10

/* $ceu = [
    "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];


    foreach($ceu as $pais => $ciudades){
        echo "Las ciudades de $pais son: <br>";
        echo "<ul>";
        foreach($ciudades as $ciudad){
            echo "<li>$ciudad</li>";
        };
        echo "</ul>";
    }                 
    
    
    $argentina = array('Ciudades' => array("Buenos Aires", "Santa Fe"), 'EsAmericano' => array(true));

    if ($argentina['EsAmericano'] = True){
        echo $argentina['EsAmericano'];
    }

    //print_r($argentina); */


    //clase 12/11

    

?>