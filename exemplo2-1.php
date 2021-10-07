<?php
   $nome = array("Ana","Maria", "Bete", "Carmem","João","Daniel");
   asort($nome);
   print_r($nome);
   for($i = 0 ; $i < count($nome); $i++){
       echo $nome[$i] . ' ' . $i . ' ' . $i+1 .  '<br> ';
   }
   foreach ($nome as $key => $val) {
    echo "$key = $val\n";
}

   echo 'Há ' . count($nome) . ' elementos no array';
?>