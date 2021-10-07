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
        
        $p = new Pessoa("Ugo","m");
        echo $p->exibir();
    ?>
</body>
</html>
