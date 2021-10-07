<?php
   $_m = 6;
   $_contar_divisores = 0;
   for($_i = 2 ; $_i<= $_m/2;$_i++){
      if( $_m % $_i == 0){
            $_contar_divisores = $_contar_divisores + 1;
        }
   }     
   if ($_contar_divisores == 0)
    echo "$_m é primo";
   else
    echo "$_m é composto";
?>