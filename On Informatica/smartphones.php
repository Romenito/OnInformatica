<!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" type="image/ico" href="img/logo.ico" />
	<title>ON Informática | Smartphones</title>
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
	    <form >
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
	<!-- PRODUTOS -->
	<section id="imagens">
		<ul>
			<li id="celular1"><h2>Smartphone Sony Xperia Z5</h2>
				<h5 id="celular11">Smartphone Sony Xperia Z5 32GB Preto 4G - Câm. 23MP + Selfie 5.1MP Flash Tela 5.2" Full HD</h5>
				<h3 id="celular12">R$ 3.343,91 à vista</h3>
				<br><br><br><button type="button" class="show-modal1">Ver vídeo</button></li>
			<li id="celular2"><h2>Smartphone Microsoft Lumia</h2>
				<h5 id="celular21">Smartphone Microsoft Lumia 535 8GB Dual Chip 3G - Câm. 5MP Tela 5" Proc. Quad Core Windows Phone 8.1</h5>
				<h3 id="celular22">R$ 799,00 à vista</h3>
				<br><br><br><button type="button" class="show-modal2">Ver vídeo</button></li>
			<li id="celular3"><h2>Smartphone Samsung Galaxy</h2>
				<h5 id="celular31">Smartphone Samsung Galaxy S6 Edge 32GB Preto 4G - Câm. 16MP + Selfie 5MP Tela 5.1" WQHD Octa Core</h5>
				<h3 id="celular32">R$ 2.551,91 à vista</h3>
				<br><br><br><button type="button" class="show-modal3">Ver vídeo</button></li>
			<li id="celular4"><h2>Smartphone LG K10 TV Dual</h2>
				<h5 id="celular41">Smartphone LG K10 TV Dual Chip 16GB 4G - Câm. 13MP + Selfie 8MP Tela 5,3" Proc. Octa-Core</h5>
				<h3 id="celular42">R$ 1.055,91 à vista</h3>
				<br><br><br><button type="button" class="show-modal4">Ver vídeo</button></li>
			<li id="celular5"><h2>iPhone 6S Apple 64GB</h2>
				<h5 id="celular51">iPhone 6S Apple 64GB 4G iOS 8 Tela 4.7 Câm. 8MP - Proc. A8 Touch ID Wi-Fi GPS</h5>
				<h3 id="celular52">R$ 3.079,91 à vista</h3>
				<br><br><br><button type="button" class="show-modal5">Ver vídeo</button></li>
			<li id="celular6"><h2>Smartphone Motorola Moto G</h2>
				<h5 id="celular61">Smartphone Motorola Moto G Colors 2ª Geração 16GB - Dual Chip 4G Câm. 8MP Tela 5"</h5>
				<h3 id="celular62">R$ 949,05 à vista</h3>
				<br><br><br><button type="button" class="show-modal6">Ver vídeo</button></li>
		<?php

                 $link = @mysql_connect("localhost", "root", "")
                 or die ('Erro: '. mysql_error());
                 mysql_select_db("oninformatica");

                 $sql = mysql_query("SELECT * FROM produto where tipo='smartphone'");

                while ($produto = mysql_fetch_object($sql)) {
	                     echo "<li><img src='img/".$produto->imagem."' alt='Foto de exibição' /></br>";
	                     echo "<h1 style='background-color:gray ; color:white'>" . $produto->nome . "</h1>";
	                     echo "<strong>" . $produto->descricao . "</strong></br><br>";
	                     echo "<h4 style='color:red; font-size:20px' >R$ " . $produto->preco . " à vista</h4></li>";
                }
        ?>
		</ul>
		<video id="clickVideo">
			<link href="css/showYtVideo.css" rel="stylesheet" type="text/css" property=''>
			<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="js/jquery.showYtVideo.js"></script>
			<script type="text/javascript" src="js/rotinaVideo-smartphones.js"></script>
		</video>
		
	</section>
	<!-- PUBLICIDADES -->
	<aside id="publi1">
		<img src="img/publi1.jpg" alt="Publicidade 1" >
	</aside>
	<aside id="publi2">
		<img src="img/publi2.jpg" alt="Publicidade 2" >
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