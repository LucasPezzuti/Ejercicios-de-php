<?php

//$nombre=$_GET['name'];
$db= file_get_contents('usuarios.json');
$usuarios = json_decode($db,true);
//print_r($usuarios);

$recibido =$_GET['email'];

/* if(isset($_GET['email']){
    $verificar=array_column($usuarios,'email');
}) */
$indice=array_search($recibido ,array_column($usuarios,"email"));

 if($indice){
    $usuario=$usuarios[$indice];
    print_r( $usuario);

}else {
    echo 'nope'; 
} 


?>