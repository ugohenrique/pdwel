
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $nome = "João da Silva";
        $idade = 45;

        echo "Bem vinda <b>" . $nome  . "</b> sua idade é <u>" . $idade . " </u> ";

        echo '<br> Nome ' . $nome ;
        echo ' sua idade é <i>' . $idade . '</i>';

        $nome = 200;
        $idade = "ola mundo";

        echo '<br> Nome ' . $nome ;
        echo ' sua idade é <i>' . $idade . '</i>';


    ?>
</body>
</html>
