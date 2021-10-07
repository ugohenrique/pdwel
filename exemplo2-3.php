<?php
    echo "<h1>Exemplo de Array multidimensional</h1>";
   $nome = array(array(1,2,3),array(4,5,6));
  
   print_r($nome);

   echo '<br>Há ' . count($nome) . ' elementos no array';
?>