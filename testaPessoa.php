<!doctype html>
<html>
<head>
<title>Ola mundo PHP</title>
</head>
<body>
    <h1>Exemplo de variável</h1>
    <?php
        $pasta = __DIR__ . '\classes\pessoa.php';
        require($pasta);
        
        if( !empty($_POST['txtNome'])){
            $p1 = new Pessoa($_POST['txtNome'],$_POST['optSexo']);
            //pega esse objegto p1 serializa, grava no disco ou envia pela rede
            // poe o objeto numa sessão e recupera em outro contexto da aplicação
            echo $p1;
        }
        else{
            echo 'Nome não preenchido';
        }
       
       $p2 = new Pessoa("Iris","F");
       $p3 = new Pessoa("Carlos","M");

       $pessoas = array($p1,$p2,$p3);

       foreach ($pessoas as $key => $valueObjects) {
           echo " <br>$key = " . $valueObjects->getNome()  ;
       }


    ?>
</body>
</html>
