
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $nome = array('chefe'=>"Natan",'secretario'=>"Andre",'ceo'=>"Bianca");
       echo $nome['chefe'] . "<br>"; 
       echo $nome['secretario'] ."<br>";
       echo $nome['ceo'] . "<br>";

       print_r($nome);
       $nome['ceo'] = 'Bianca HNG'; 
       asort($nome);
       echo '<br>';
       echo '<table border=1>'; 
       foreach ($nome as $key => $value) {
        echo "<tr><td> $key </td> <td> $value </td><tr>";   
       }
       echo '</table>';
       
    ?>
</body>
</html>
