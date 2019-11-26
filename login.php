<?php
$error="";
if($_POST){

    $db= file_get_contents('usuarios.json');
    $usuarios = json_decode($db,true);

$nombre = $_POST['email'];
$chequeoemail=  array_search($nombre ,array_column($usuarios,"email"));
        if($chequeoemail!==false){
            $usuario = $usuarios[$chequeoemail];
            $contraseña = $_POST['password'];
            $chequeocontraseña = password_verify($contraseña ,$usuario["password"]);
            if($chequeocontraseña){
                echo 'el usuario existe';
                $_SESSION['usuario'] = $usuario;
                //header('Location: miperfil.php');
            } else {
                echo 'pass incorrecto';
            }
       
        }  else {
            echo 'el usuario no existe';
        }
    }

        
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Iniciar session</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div><span class='error'></span></div>
             
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
               
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container'>
                <input type="checkbox">Recuerdame
                    <br>
                </div>
                <div class='container'>
                   
                    <input type='submit' name='Submit' value='Entrar' />
                </div>

            </fieldset>
        </form>

    </body>

    </html> 