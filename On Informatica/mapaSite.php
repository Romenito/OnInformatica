<?php
session_start();
?>
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" type="image/ico" href="img/logo.ico" />
	<title>ON Informática | Mapa do Site</title>
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
		<script type="text/javascript" src="js/altocontrastemapa.js"></script>
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
		<h2 id="sobrenos">Mapa do Site</h2>
		<p>Abaixo você encontra os links para todas as páginas do site:</p>
			<h5><a id="ir-inicio" href="index.php" >Página Inicial</a></h5>
			<h4>Produtos:</h4>
			<h5><a id="ir-notebooks" href="notebook.php" >Todos os notebooks</a></h5>
			<h5><a id="ir-smartphones" href="smartphones.php" >Todos os smartphones</a></h5>
			<h5><a id="ir-tablets" href="tablets.php" >Todos os tablets</a></h5>
			<h4>Outros:</h4>
			<h5><a id="ir-sobre-nos" href="sobre.html" >Quem somos nós</a></h5>
			<h5><a id="ir-cadastro" href="telaCadastro.php" >Cadastrar-se no site</a></h5>
		<aside id="mapaSite">
			<img src="img/mapaSite.jpg" alt="Mapa do Site" style="width: 640px; height:360px"/>
		</aside>
	</section>
	
	<!-- RODAPÉ -->
	<footer id="rodape">
		<a id="gotop" href="#" onclick="MGJS.goTop();return false;">Ir para o topo.</a>
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