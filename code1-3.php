
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $_nota = 4;
        $_presenca = 76;
        if ($_presenca < 75){
            echo 'reprovado';
        }
        elseif($_nota >= 6){
            echo ' aprovado';
        }
        else{
            echo 'não sei qual o status';
        }


    ?>
</body>
</html>
