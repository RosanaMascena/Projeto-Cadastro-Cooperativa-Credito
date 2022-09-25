# Projeto Cadastro Atendimento - Cooperativa de Crédito

Projeto realizado no curso Tecnólogo Sistemas para Internet, da disciplina de Programação Back-end II.

## Requesitos exigidos para o projeto:

1 - Para o registrar o protocolo, será necessário preencher os seguintes campos: solicitante, descrição e e-mail. Além destes campos, o sistema irá armazenar em cada registro o ano, a data/hora do cadastro e a situação de status 1 (aguardando análise). O número do protocolo é a chave primária do registro no banco de dados (não é preciso gerar número especifico para o protocolo).

2 - Após realizar a solicitação de cadastro, você deve mostrar em tela os dados que foram cadastrados a fim de confirmar e imprimir o protocolo ao solicitante.

3 - O solicitante pode a qualquer momento buscar informações de sua solicitação. Para isso ele deve informar o número do protocolo gerado e o sistema deverá mostrar as informações na tela.

4 – O sistema deve ser construído utilizando a linguagem PHP, banco de dados Mysql com PDO.

5 – Seguir a estrutura da tabela protocolo.

<img src="https://sistemasead.unicesumar.edu.br/flex/amfphp/services/Portal/ImagemQuestionario2/QUE_143398_419448_1.png" />


## Como uso a aplicação?

Baixe o XAMPP para o seu computador.

Depois, baixe ou clone este repositório na sua máquina local, dentro da pasta htdocs, que está dentro da pasta de instalação do XAMPP.

Através do link http://localhost/phpmyadmin/, crie um banco com o nome "db_protocolo" e importe o arquivo "db_protocolo.sql", que está na pasta com nome de "banco", dentro da pasta do projeto. 

Na aba do seu navegador digite localhost/nome-da-pasta-do-projeto. Prontinho, você estará visualizando o Projeto.

## Linguagens e pacotes utilizados:

<div style="display: grid; grid-auto-flow:column; width: fit-content; gap: 0.5rem;">
  <img height="25px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" />
  <img height="25px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
  <img height="25px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
  <a href="https://en.wikipedia.org/wiki/XAMPP" target="_blank"><img height="25px" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/78/XAMPP_logo.svg/182px-XAMPP_logo.svg.png"></a>
</div
