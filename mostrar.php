<?php
session_start();


if(isset($_POST['resetear'])){
    $_SESSION['contador'] = 0;
    setcookie('contador',0,time()+3600);
}


if(isset($_POST['incrementar'])){
    $_SESSION['contador'] = $_SESSION['contador']+1;
    print_r($_SESSION['contador']);
    setcookie('contador',0,time()+3600);
}

?>