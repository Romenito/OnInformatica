<?php session_start(); include 'conn.php';  ?>
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" type="image/ico" href="img/logo.ico" >
	<title>ON Informática | Início</title>
 </head>
 <body id="corpo" onload="myFunction()">
	<div id="interface">
	<header id="cabecalho">
		<a accesskey="1" href="#menu" id="link-conteudo">Ir para o conteúdo <span>[1] </span></a>
		<a accesskey="2" href="#cabecalho" id="link-menu">Ir para o menu <span>[2] </span></a>
		<a accesskey="3" href="#rodape" id="link-rodape">Ir para o rodapé<span>[3] </span> </a>
		<a accesskey="4" href="#busca" id="link-busca">Ir para busca <span>[4]</span></a>
		<a accesskey="5" href="#" onclick="mudaCor(1)" id="link-alto-contraste">Alto Contraste <span>[5]</span></a>
		<a accesskey="6" href="mapaSite.html" id="link-mapa-site">Mapa do site <span>[6]</span></a>
		<script type="text/javascript" src="js/altocontraste.js"></script>
	    <form>
		<h1 id="nome-empresa">ON Informática</h1>
		<h2 id="slogan" >Segurança em sua compra Online</h2>
		</form>
		<form id="login"  method="post" >
			Login:<br>
			<input type="text" id="usuario"  name="usuario"><br>
			Senha:<br>
			<input type="text" id="senha" name="senha"><br>
			<input type="submit" id="logar" name="logar" value="Entrar"><br>
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
		<li id="menu1"><a id="menu1.1" href="index.html" title="Home">Início</a> </li>
		<li id="menu2"><a  id="menu1.2" href="notebooks.html" title="Notebooks">Notebooks</a> </li>
		<li id="menu3"><a id="menu1.3" href="smartphones.html">Smartphones</a> </li>
		<li id="menu4"><a id="menu1.4" href="tablets.html">Tablets</a></li>
		<li id="menu5"><a id="menu1.5" href="sobre.html">Sobre Nós</a></li>
	 </ul>
	</nav>
	<!-- BANNER -->
	<section id="promocao">
	    <h6>Banner Promocional</h6>
		<link rel="stylesheet" type="text/css" href="css/estiloBanner.css" property=''>
	    <div id="wrapper">
			<a id="bannerclick" href="#">
			<img id="banner" src="img/bannerA.jpg" alt="Banner Promocional">
			</a><br>
		</div>
		<div id="bip"></div>
		<script type="text/javascript" src="js/rotinaBanner.js"></script>
	</section>
	<!-- IMAGENS -->
	<section id="imagens" onload="MyFunction()">
		<ul >
		  <li id="notebook"><h2>Notebook Samsung Expert X23</h2>
			<h5>Samsung Expert X23 Intel Core i5 - Placa de Vídeo 2BG 8GB 1TB Windows 10 LED 15,6"</h5>
			<h3>R$ 3.324,05 à vista</h3>
			<button type="button" class="show-modal1">Ver vídeo</button></li>
		  <li id="tablet"><h2>Tablet Samsung Galaxy Tab E</h2>
			<h5>Tablet Samsung Galaxy Tab E 8GB Tela 9.6 Wi-Fi - Android 4.4 Quad-Core Câm. 5MP + Frontal 2MP GPS</h5>
			<h3>R$ 849,90 à vista</h3>
			<button type="button" class="show-modal2">Ver vídeo</button></li>
		  <li id="celular"><h2>Smartphone Lumia 535</h2>
			<h5>Smartphone Microsoft Lumia 535 8GB Dual Chip 3G - Câm. 5MP Tela 5" Proc. Quad Core Windows Phone 8.1</h5>
			<h3>R$ 799,00 à vista</h3>
		    <button type="button" class="show-modal3">Ver vídeo</button></li>
		</ul>
		<video id="clickVideo">
			<link rel="stylesheet" href="css/showYtVideo.css" type="text/css" property=''>
			<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="js/jquery.showYtVideo.js"></script>
			<script type="text/javascript" src="js/rotinaVideo-index.js"></script>
		</video>
	</section> 
	<!-- PUBLICIDADES -->
	<aside id="publi1">
		<img src="img/publi1.jpg" alt="Publicidade 1">
	</aside>
	<aside id="publi2">
		<img src="img/publi2.jpg" alt="Publicidade 2">
	</aside>
	<!-- RODAPÉ -->
	<footer id="rodape">
		<a id="gotop" href="#" onclick="MGJS.goTop();return false;">Ir para o topo.</a>
		<p>Desenvolvido por: André S. & Romen D.</p>
		<p>Contato: <a href="mailto:someone@example.com">andre@email.com</a>.</p>
		<p>Contato: <a href="mailto:someone@example.com">romen@email.com</a>.</p>
		<p>Criado em: 20 de maio de 2016.</p>
		<p>Atualizado em: 27 de maio de 2016.</p>
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