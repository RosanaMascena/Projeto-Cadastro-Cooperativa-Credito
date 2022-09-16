<?php

class BancoDeDados
{
	public function conexao_banco()
	{
		define('servidor', 'localhost');
		define('usuario', 'root');
		define('senha', '');
		define('banco', 'db_protocolo');

		try{				
			$conectar = new PDO('mysql:host=' . servidor . ';dbname=' . banco, usuario, senha);
			return $conectar;
		}
		catch ( PDOException $e ){
			echo 'Erro ao conectar com o Banco: ' . $e->getMessage();
		}
	}
}