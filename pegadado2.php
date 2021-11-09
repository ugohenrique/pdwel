<?php
    $nome = $_REQUEST['txtNome'];
    $sexo = $_REQUEST['txtSexo'];
    $submit = $_REQUEST['submit'];

    print_r($_FILES);

    echo "Ola $nome seja bem vindo seu sexo é $sexo é o seu submit é $submit";

?>