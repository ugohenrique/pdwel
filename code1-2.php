
<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $_n = -10;

        if ($_n > 0){
            echo $_n . ' é positivo';
        }
        else{
            if ($_n < 0){
                echo $_n . ' é negativo';
            }
            else{
                echo $_n . ' é nulo';
            }
        }


    ?>
</body>
</html>
