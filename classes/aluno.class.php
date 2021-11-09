<?php
    $pasta = __DIR__ . '\pessoa.php';
    require($pasta);
    final class Aluno extends Pessoa{
        private $id;

        public function __construct($nome, $sexo, $id){
            parent::__construct($nome,$sexo);
            $this->id = $id;
        }
        //override
        public function __tostring(){
            return "$this->id , " . $this->getNome() . " , " . $this->getSexo();
        }
    }
  ?>