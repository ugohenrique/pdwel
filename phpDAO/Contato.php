<?php
	class	Contato	{
        private	long	$id;
        private	String	$nome;
        private	String	$email;
        private	String	$endereco;
        private		$dataNascimento;
        
        public function getNome():string	{
            return	$this.nome;
        }
        public	function	setNome($nome)	{
            $this.nome	=	$nome;
        }
        public	function getEmail()	{
            return	$this.email;
    	}
        public	function	setEmail($email)	{
            $this.email	=	$email;
        }
        public	function	getEndereco()	{
            return	$this.endereco;
        }
        public	function setEndereco($endereco)	{
            $this.endereco	=	$endereco;
        }
        public	function	getId()	{
            return	$this.id;
        }
        public	function	setId($id)	{	
            $this.id	=	$id;
    	}
        public	function getDataNascimento()	{
            return	$this.dataNascimento;			
        }
        public	function	setDataNascimento($dataNascimento)	{
            $this.dataNascimento	=	$dataNascimento;				}	
        }
    }
