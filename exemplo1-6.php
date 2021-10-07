<?php
   $_m = 3;
   $_contar_divisores = 0;
   $_i = 1;
   while($_contar_divisores <3){
        if( $_m % $_i == 0){
            $_contar_divisores = $_contar_divisores + 1;
        }
        $_i++;
   }     
   if ($_contar_divisores == 2)
    echo "$_m é primo";
   else
    echo "$_m é composto";
?>