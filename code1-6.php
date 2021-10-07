
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $m = 20;
        $n = 6;
        echo "MDC($m,$n) = ";
        do{
            $r = $m % $n;
            $m = $n ;
            $n = $r ;

        }while($r != 0);

        echo $m;

    ?>
</body>
</html>
