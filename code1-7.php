
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
    
        function fatorial($n){
            $p = 1;
            $i = 1;
            while($i <= $n){
                $p = $p * $i++;
            }
            return $p;
        }
       
        $i = 0;
        do{
            echo "$i! =" . fatorial($i++) . "<br>";
        }while ($i <=200);

    ?>
</body>
</html>
