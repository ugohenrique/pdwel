<?php
    class	ConnectionFactory	{	
        public	function getConnection():PDOConnection	{
            try	{
                return	new PDOConnection();
            }	catch	(PDOException	$e)	{	
                throw	new	RuntimeException($e);
            }
         }
    }
?>