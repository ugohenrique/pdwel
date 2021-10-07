<?php
   function fatorial($_n){
       $_p = 1;
       for($_i = 1; $_i <= $_n; $_i++)
          $_p = $_p * $_i;
       return $_p;  
   }

   $_k = 0;
   while ($_k <= 100){
       echo "$_k ! = " . fatorial($_k) . " <br>";
       ++$_k;
   }
   
?>