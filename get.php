<?php
    $key1 = $_GET['lp'];
    $key2 = $_GET['version'];
    $key3 = $_GET['lang'];
    $key4 = $_GET['os'];
     print("<pre>" . print_r($_GET,true) . " </pre>");

    echo "$key1 - $key2 - $key3 - $key4"; 
?>