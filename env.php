<?php
    setcookie('teste', "ola mundo");
    putenv('test=ola');
    print("<pre>" . print_r($_ENV,true) . " </pre>");
?>