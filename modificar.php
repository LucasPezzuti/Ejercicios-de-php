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


<form action="modificar.php" method="post">
    <input type="hidden" value= "true" name="resetear">
    <button type="submit">Resetear</button>
    </form>

<form action="modificar.php" method="post">
    <input type="hidden" value= "true" name="incrementar">
    <button type="submit">incrementar</button>
    </form>

    