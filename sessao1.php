<?php
    session_start();   
    echo (empty($_SESSION));
    foreach ($_SESSION as $key => $value) {
        echo "$key = $value <br>";
    }
?>
