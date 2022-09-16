<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Protocolo</title>
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
        <form class="form-consulta" action="mostrarProtocolo.php" method="POST">
            <h2>Consulte a situação do seu Cadastro</h2>

            <label for="protocolo">Número do Protocolo</label>
            <input type="number" name="protocolo" id="protocolo" class="input-padrao" required>

            <input type="submit" value="Buscar" class="consultar-cadastro">
        </form>
    </main>
</body>
</html>