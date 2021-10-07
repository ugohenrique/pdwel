<?php
    $_m = 45;
    $_n = 15;
    echo "MDC($_m , $_n)= ";
    do{
        $_r = $_m % $_n;
        $_m = $_n;
        $_n = $_r; 
    }while($_r != 0);

    echo $_m;
        
?>