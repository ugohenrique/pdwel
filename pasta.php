<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $pasta = __DIR__ . '\classes\pessoa.php';
        echo "<p>pasta do script $pasta<br>";
        require($pasta);
        
        $p1 = new Pessoa("Ugo","m");
        $p2 = new Pessoa("Iris","f");
        $pessoas = array($p1,$p2);
        print_r($pessoas);
        foreach ($pessoas as $key => $value) {
            echo "$key  =  $value <br>";
        }
        //echo $p->exibir();
    ?>
</body>
</html>
