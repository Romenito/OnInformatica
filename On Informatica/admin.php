<?php session_start();  ?>
 
<?php
if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){	
header("Location: index.php");	
	}
?>
<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" type="image/ico" href="img/logo.ico" >
	<title>ON Informática | Início</title>
</head>


 <body id="corpo" onload="myFunction()">

	<div id="interface">
	 <?php
$secao_usuario = $_SESSION['usuario'];
$secao_senha   = $_SESSION['senha'];
?>
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
		    <h3>Ola :<?php  echo $secao_usuario;   ?></h3> <br>
			Seja Bem Vindo!!<br>
			Cadastre seus produtos;<br>
			Remova seus Produtos;<br>
			Atualize seusProdutos;<br>
			Click em Sair para retornar<br>
			<a href="?sair">sair</a>
            <?php
               if(isset($_REQUEST['sair'])){	
	           session_destroy();
	            header("Location: index.php");	
	          }
             ?>
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
	
	<div></div>
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