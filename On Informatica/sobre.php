<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" type="image/ico" href="img/logo.ico" />
        <title>ON Informática | Sobre Nós</title>
    </head>
    <body id="corpo" onload="myFunction()">
        <div id="interface">
            <header id="cabecalho">
                <a accesskey="1" href="#menu" id="link-conteudo">Ir para o conteúdo <span>[1] </span></a>
                <a accesskey="2" href="#cabecalho" id="link-menu">Ir para o menu <span>[2] </span></a>
                <a accesskey="3" href="#rodape" id="link-rodape">Ir para o rodapé<span>[3] </span> </a>
                <a accesskey="4" href="#busca" id="link-busca">Ir para busca <span>[4]</span></a>
                <a accesskey="5" href="#" onclick="mudaCor(1)" id="link-alto-contraste">Alto Contraste <span>[5]</span></a>
                <a accesskey="6" href="mapaSite.php" id="link-mapa-site">Mapa do site <span>[6]</span></a>
                <script type="text/javascript" src="js/altocontrastesobre.js"></script>
                <form>
                    <h1 id="nome-empresa">ON Informática</h1>
                    <h2 id="slogan" >Segurança em sua compra Online</h2>
                </form>
                <form id="login">
                    Login:<br>
                    <input id="email" type="email" required name="email" placeholder="email@exemplo.com"><br>
                    Senha:<br>
                    <input id="senha1" type="password" required name="psw" placeholder="8 dígitos" pattern="\d{8}"><br>
                    <input type="submit" value="Entrar"><br>
                    Não é cadastrado ainda? <br>
                    <a href="telaCadastro.html" id="cadastrar" >Cadastre-se agora</a>
                </form>
                <!-- BUSCA NO SITE -->
                <form id="busca" method="get" action="/search/">
                    <input id="caixa" type="search" name="busca" placeholder="Pesquisar...">		
                    <button type="button">ok</button>
                </form>
            </header>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li id="menu1"><a id="menu1.1" href="index.php" title="Home">Início</a> </li>
                    <li id="menu2"><a  id="menu1.2" href="notebook.php" title="Notebooks">Notebooks</a> </li>
                    <li id="menu3"><a id="menu1.3" href="smartphones.php">Smartphones</a> </li>
                    <li id="menu4"><a id="menu1.4" href="tablets.php">Tablets</a></li>
                    <li id="menu5"><a id="menu1.5" href="sobre.php">Sobre Nós</a></li>
                </ul>
            </nav>
            <!-- SOBRE A LOJA -->
            <section id="sobre">
                <h2 id="sobrenos">Sobre nós</h2>
                <p>Somos um empresa fictícia de venda de aparelhos eletrônicos, tais como notebooks, smartphones e tablets.<br>
                    Surgirmos como atividade avaliativa da matéria de Programação Web do curso de Sistemas de Informação do Instituto
                    Federal de Educação, Ciência e Tecnologia da Bahia-IFBA, campus Vitória da Conquista, turma 2016.1, ministrada 
                    pelo professor Stênio Longo.</p>
                <p>Formas de contato:</p>
                <p>Mande um email: <a href="mailto:someone@example.com">andre@email.com</a> ou 
                    <a href="mailto:someone@example.com">romen@email.com</a>.</p>
                <p>Site criado em: 20 de maio de 2016.</p>
                <p>Última atualização em: 27 de maio de 2016.</p>
            </section>

            <!-- RODAPÉ -->
            <footer id="rodape">
                <a id="gotop" href="#" onclick="MGJS.goTop();
                        return false;">Ir para o topo.</a>
                <p>Desenvolvido por: André S. & Romen D. | Contato: <a href="mailto:someone@example.com">andre@email.com</a>.
                    <a href="mailto:someone@example.com">romen@email.com</a>.</p>
                <p>Criado em: 20 de maio de 2016. Atualizado em: 27 de maio de 2016.</p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px"
                             src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                             alt="Valid CSS!" /></a>
                </p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px"
                             src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                             alt="Valid CSS!" />
                    </a>
                </p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px"
                             src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                             alt="Valid CSS!" />
                    </a>
                </p>
            </footer> 
        </div>
    </body>
</html>