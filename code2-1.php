
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $nome = array("Natan","Andre","Bianca");
       echo "$nome[0] <br>"; 
       echo "$nome[2] <br>";
       echo "$nome[1] <br>";

       print_r($nome);

       asort($nome);
       echo '<br>'; 
       for($i = 0 ; $i < count($nome); $i++){
        echo "$nome[$i] <br>"; 
       }
       
    ?>
</body>
</html>
