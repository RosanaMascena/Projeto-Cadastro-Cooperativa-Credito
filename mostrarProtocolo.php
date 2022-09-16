<?php 

include 'connection/conexao.php';
include 'class/protocolo.php';

$conectar = new BancoDedados();
$v_protocolo = new Protocolo();

$protocolo = $_POST['protocolo'];
$retorno = $v_protocolo->consultar_cadastro($conectar, $protocolo);

if($retorno){

    $dados = json_decode($retorno);

    if (isset($dados) && !empty($dados)) {
        foreach ($dados as $key =>$value){              
        
            if(!$value->numero){
                $respondido = false;
                $resposta = 'Cadastro não encontrado! Favor verificar o número do seu protocolo.';
                $dataResposta = new \DateTime($value->dataResposta);
                $dataRespostaFormatada = $dataResposta->format('d-m-Y H:i:s');
            }else{
               if ($value->status == 2) {
                    $respondido = true;
                    $resposta = $value->resposta;
                    $dataResposta = new  \DateTime;
                    $dataRespostaFormatada = $dataResposta->format('d-m-Y H:i:s');
                } else {
                    $respondido = false;
                    $resposta = 'Aguardando analise';
                    $dataResposta = new  \DateTime;
                    $dataRespostaFormatada = $dataResposta->format('d-m-Y');
                } 
            }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações de Protocolo</title>
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

    <main>
        <div>
            <div style="display:none;">Resposta da pesquisa de protocolo</div>
            <p style="display:none;"><?php echo $resposta ?>
                <br />
                <strong style="display:none;"><?php echo $dataRespostaFormatada ?></strong>
            </p>
        </div>

        <div class="visualizacao-protocolo">
            <h2><strong>Detalhes do seu Protocolo</strong></h2>
            <br/>
            <p><?php echo '<strong>Protocolo:</strong> ' .$value->numero?></p>
            <br/>
            <p><?php echo '<strong>Nome:</strong> ' .$value->solicitante?></p>
            <br/>
            <p><?php echo '<strong>E-mail:</strong> ' .$value->email?></p>
            <br/>
            <p><?php echo '<strong>Sua solicitação:</strong> ' .$value->descricao?></p>
            <br/>
            <p><?php if($value->status == 1) echo "<strong>Status:</strong> Aguardando análise";
            else echo "Status: Concluído"; ?></p>
            <br/>
            <p><?php echo '<strong>Ano:</strong> ' .$value->ano?></p>
            <br/>
            <p><?php echo '<strong>Data do Cadastro:</strong> ' .$value->dataCadastro?></p>
            <br/>
        </div>
        
        <?php 
                }
            }else{?>
                <h2>Protocolo de solicitação de atendimento não encontrado!</h2>
                <p>Entre em contato através do nosso e-mail: atendimento@cooperativa.com.br</p>
            <?php }
            }
            else{
            echo "Erro";
            }
        ?>
    </main>
  </body>
</html>