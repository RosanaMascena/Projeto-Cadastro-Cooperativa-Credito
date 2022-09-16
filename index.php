<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Cadastro</title>
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
        <form class="form-cadastro" action="autenticarCadastro.php" method="POST">
            <h2>Cadastro para Atendimento</h2>
            <h3>Preencha com seus dados:</h3>
            <br/>

            <label for="solicitante">Nome completo</label>
            <input type="text" name="solicitante" id="solicitante" class="input-padrao" required>
            
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

            <label for="descricao">Descreva aqui sua solicitação</label>
            <textarea cols="70" rows="10" id="descricao" name="descricao" class="input-padrao" required></textarea>


            <input type="submit" value="Enviar" class="enviar-cadastro">
        </form>
    </main>
</body>
</html>