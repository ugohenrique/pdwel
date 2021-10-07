
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $nome = array(0 =>array('chefe'=>"Natan",'secretario'=>"Andre",'ceo'=>"Bianca"),1=>array("Uno","Fusca","Brasilia"),2=>array("Pêra","Maçã","laranja","Banana","Manga"));
       
       print_r($nome);
       
       foreach ($nome as $v1) {
       
        echo '<table border=1>'; 
           foreach ($v1 as $key => $value) {
             echo "<tr><td> $key </td> <td> $value </td><tr>";   
            }
            echo '</table>';
        }
       
       
    ?>
</body>
</html>
