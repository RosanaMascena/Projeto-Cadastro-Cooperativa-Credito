<?php 

include 'connection/conexao.php';
include 'class/protocolo.php';
error_reporting (0);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="./index.php"><img id="logo" src="./img/cooperativa-de-credito.png"></a>
            <h1>Cooperativa de Crédito</h1>
            <ul class="lista-nav">
                <li><a href="./index.php" title="Home Cadastro" alt="Home Cadastro">Cadastro para Atendimento</a></li>
                <li><a href="./buscarProtocolo.php" title="Consulta ao Protocolo" alt="Consulta ao Protocolo">Consulta ao Protocolo</a></li>
            </ul>
        </nav>
    </header>

<?php

$conectar = new BancoDedados();
$protocolo = new Protocolo();

$solicitante = $_POST["solicitante"];	
$descricao = $_POST["descricao"];
$email = $_POST["email"];				
$ano = date('Y');
$status = 1;

$confirmar_cadastro = $protocolo->cadastrar($conectar, $solicitante, $descricao, $email, $ano, $status);

if (!$confirmar_cadastro){								
    echo "<p>Erro ao cadastrar! Favor verificar.</p>";							
}
else{		
        $retorno = $protocolo->mostrar_cadastro($conectar);
        $dados = json_decode($retorno);

    if (isset($dados) && !empty($dados)) {
        foreach ($dados as $key =>$value){
            echo"<div class='autenticacao_cadastro'><h3>PROTOCOLO REALIZADO COM SUCESSO!</h3><br/>";
            echo "<p>Protocolo: ".$value->numero."</p><br/>";			
            echo "<p>Solicitante: ".$value->solicitante."</p><br/>";			
            echo "<p>Descrição: ".$value->descricao."</p><br/>";			
            echo "<p>E-mail: ".$value->email."</p><br/>";			
            echo "<p>Ano: ".$value->ano."</p><br/>";			
            if($value->status == 1) echo "<p>Status: Aguardando análise</p><br/>";
                else echo "<p>Status: concluído</p><br/>";	
            echo "<p>Data Cadastro: ".$value->dataCadastro."</p><br/></div>";	
            echo "<br><button class='botao_imprimir'>IMPRIMIR</button>";
        } 
    }
}

?>
</body>
</html>