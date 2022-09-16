<?php

class protocolo{

	public function consultar_cadastro($conectar, $protocolo){
		$conn = $conectar->conexao_banco();

		$sql = "select * from protocolo where numero = '%s'";

		$sql = sprintf($sql, $protocolo);		
		$consulta = $conn->prepare($sql);
		$consulta->execute();

		$results = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
	}

	public function mostrar_cadastro($conectar){
		$conn = $conectar->conexao_banco();

		$sql = "SELECT * FROM protocolo ORDER BY numero DESC LIMIT 1";
	
		$consulta = $conn->prepare($sql);
		$consulta->execute();

		$results = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
	}

    public function cadastrar($conectar,$solicitante, $descricao, $email, $ano, $status){
			
		$sql = "INSERT INTO protocolo(solicitante, descricao, email, ano, status) VALUES(:solicitante, :descricao, :email, :ano, :status)";

		$conn = $conectar->conexao_banco();
		$inserir_dado = $conn->prepare($sql);

		$inserir_dado->bindParam( ':solicitante', $solicitante );		
		$inserir_dado->bindParam( ':descricao', $descricao );
		$inserir_dado->bindParam( ':email', $email );
		$inserir_dado->bindParam( ':ano', $ano );
		$inserir_dado->bindParam( ':status', $status );

		$resultado = $inserir_dado->execute();
 
		if ($resultado)	
		  return $resultado;		   
		else
			return false;	
	}

    public function gerar_protocolo($conectar){
		
		$sql = "SELECT protocolo FROM ouvidoria where protocolo != 'ABC654321' AND protocolo != 'ABC123456' ORDER BY protocolo DESC limit 1";
	
		$conectar_banco = $conectar->conexao_banco();
		$consultaProtocolo = $conectar_banco->query($sql);

		if($consultaProtocolo)
		{
			$dados_protocolo = $consultaProtocolo->fetch(PDO::FETCH_ASSOC);
		
			$protocolo = $dados_protocolo['protocolo'] ;
			
			$ano_protocolo = str_split($protocolo, 5);	
			
			if(end($ano_protocolo) == date('Y'))
			{				
				$gerar_protocolo = str_pad ($ano_protocolo[0]+1, 4, "0", STR_PAD_LEFT); 
			}			
			else
			{
				$input = 1;
				$gerar_protocolo = str_pad ($input, 4, "0", STR_PAD_LEFT);
			}
			
			$novo_protocolo = $gerar_protocolo."/".date('Y');
			
			return $novo_protocolo;
		}else{
			return false;
		}

	}

}