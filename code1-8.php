
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
    
        function ehpar($n){
            if($n % 2 == 0)
                return true;
            
        }
       
        $i = 0;
        do{
            echo $i;
            if (ehpar($i++)==true)
              echo " é par <br>";
            else
            echo " é ímpar <br>";
        }while ($i <=200);

    ?>
</body>
</html>
