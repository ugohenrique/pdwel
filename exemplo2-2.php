<?php
    echo "<h1>Exemplo de Array associativa</h1>";
   $nome = array("chefe" =>"Ana","girl" =>"Maria", "copeira" => "Bete", "secretaria"=>"Carmem","porteiro"=>"João","recepcionista"=>"Daniel");
   $nome['chefe'] = 'Pedro';
   $nome['girl'] = "Maria Aparecida";

  
   asort($nome);
   print_r($nome);
   echo '<table border=1>';
   foreach ($nome as $key => $val) {
    echo "<tr><td>$key</td> <td> $val </td></tr>";
}
echo '</table>';
   echo '<br>Há ' . count($nome) . ' elementos no array';
?>