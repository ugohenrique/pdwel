<?php
    class Pessoa{
        protected  $nome;
        protected $sexo;
        public function __construct($nome, $sexo){
            $this->nome = $nome;
            $this->sexo = $sexo;
        }
        public function __destruct(){
            
            echo 'fui destruido';
        }
        //override 
        public function __tostring(){
            return "<br>nome:" . $this->nome . ", sexo:" . $this->sexo;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setNome($nome=null,){
            $this->nome = $nome;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
    }
?>