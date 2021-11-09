<?php
    require('ConnectionFactory.php');
	class	ContatoDao	{
	//	a	conexão	com	o	banco	de	dados	
       private	Connection	$connection;
	    public	function __construct()	{	
            $this.connection	=	ConnectionFactory::getConnection();
        }

        public	function	adiciona(Contato	$contato)	{	
            String	sql	=	"insert	into	contatos (nome,email,endereco,dataNascimento)	values	(?,?,?,?)";
        	try	{
                PreparedStatement	stmt	=	con.prepareStatement(sql);
                //	seta	os	valores
                stmt.setString(1,contato.getNome());
                stmt.setString(2,contato.getEmail());
                stmt.setString(3,contato.getEndereco());
                stmt.setDate(4,	new	Date(contato.getDataNascimento().getTimeInMillis()));
                //	executa
                stmt.execute();
                stmt.close();
            }catch	(PDOException	$e)	{
                	throw	new	RuntimeException($e);
            }
        }
        public	function	remove(Contato	$contato)	{	
            try	{
                $stmt	=	connection.prepareStatement("delete	from contatos	where	id=?");
                $stmt.setLong(1,	$contato->getId());
                $stmt.execute();
                $stmt.close();
            }catch	(PDOException	e)	{
                throw	new	RuntimeException($e);
            }
        }
        public	function	altera(Contato	$contato)	{
            $sql	=	"update	contatos	set	nome=?,	email=?,	endereco=?, dataNascimento=?	where	id=?";
            try	{
                $stmt	=	connection.prepareStatement(sql);
                stmt.setString(1,	contato.getNome());
                stmt.setString(2,	contato.getEmail());
                stmt.setString(3,	contato.getEndereco());
                stmt.setDate(4,	new	Date(contato.getDataNascimento().getTimeInMillis()));
                stmt.setLong(5,	contato.getId());
                stmt.execute();
                stmt.close();
            }catch	(SQLException	e)	{
                throw	new	RuntimeException(e);
            }
        }

    }