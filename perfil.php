<?php

$nombre=$_GET['name'];
$db= file_get_contents('usuarios.json');
$usuarios = json_decode($db,true);
print_r($usuarios);
echo "<br><br>";
foreach($usuarios as $key => $valor){
    echo print_r($valor).$key;
    echo "<br>";

    foreach($valor as $key2=> $valor ){
        if ($key2 == 'email'){
            if ($valor== $_GET['email']){
                print_r($valor);
            }
        }
    }
}    

?>