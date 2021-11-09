<?php
    //print_r($_SERVER);
    $_SESSION['logado'] = true;
    $_SESSION['user'] = 'Ugo';
    
    echo (empty($_SESSION));
    foreach ($_SESSION as $key => $value) {
        echo "$key = $value <br>";
    }
?>
