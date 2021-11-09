<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $pasta = __DIR__ . '\classes\primo.class.php';
        require($pasta);
        if( !empty($_POST['txtNumero'])){
            $primo = new Primo($_POST['txtNumero']);
            //pega esse objegto p1 serializa, grava no disco ou envia pela rede
            // poe o objeto numa sessão e recupera em outro contexto da aplicação
            if ($primo->isPrimo() == true)
                echo $primo->getNumber() . " é primo";
            else    
                echo $primo->getNumber() . " é composto";
        }
        else{
            echo 'Nome não preenchido';
        }
       
      
    ?>
</body>
</html>
