<?php
    class Primo{
        private $n;

        public function __construct($n = 1){
            $this->n = $n;
        }
        public function isPrimo(){
            
            for ($i = 2 ; $i < $this->n   ; $i++)
                if($this->n % $i == 0)
                   return false;
            return true;
            
        }

        //criar uma função que retorne uma lista de primos de 2 ate $n
        public function getListaDePrimos(){
            primos = array();
        }
        //conta o número de primos ate $n 

        public function getNumber(){
            return $this->n;
        }
        public function setNumber($n){
            
              if ($n > 2){
                $this->n = $n;
              }  
            
        }
    }

  ?>