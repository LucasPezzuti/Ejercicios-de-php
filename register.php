<?PHP

$error="";
if($_POST){

    $db= file_get_contents('usuarios.json');
    $usuarios = json_decode($db,true); //true pa q de array

    if(strlen($_POST['username'])> 3 && strlen($_POST['password'])>3){

        $validacion= $_POST['email'];
        $chequeoemail= array_search($validacion ,array_column($usuarios,"email"));
        if($chequeoemail===false){
            if(count($usuarios)){
                $id = end($usuarios)['id'] + 1;
            } else{
                $id = 1;
            }
            $usuarios[]= [

                        "id"=>$id,
                        "name"=>$_POST['name'],
                        "email" => $_POST['email'],
                        "usuario" => $_POST['username'],
                        "password" => password_hash($_POST['password'],PASSWORD_DEFAULT)
                        //$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);   
                    
            ];
            $db= json_encode($usuarios);
            file_put_contents('usuarios.json',$db);
        } else {
            echo 'El correo ya existe';
        }
    } else {
        $error = "no completo los datos, alto pt";
    }
 //$array=[];
 //$array = array("nombre" => $_POST['name'], "email" => $_POST['email'], "usuario" => $_POST['username'], "contraseña" => $_POST['password']);
 //print_r($array);
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
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>

    </html>