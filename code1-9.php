
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
    
        function ehprimo($n){
            for($i = 2 ; $i <= $n / 2; $i++)
                if($n  % $i  == 0)
                    return !true; 
            return true;
        }
       
        $i = 0;
        do{
            echo $i;
            if (ehprimo($i++)==true)
              echo "  é primo <br>";
            else
            echo " não é primo. Ele é composto<br>";
        }while ($i <=200);

    ?>
</body>
</html>
