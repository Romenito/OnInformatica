<?php session_start();
include 'conn.php'; ?>

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
	<header id="cabecalho">
	    <form>
		<h1 id="nome-empresa">ON Informática</h1>
		<h2 id="slogan" >Segurança em sua compra Online</h2>
		</form>
		<form id="login"  method="post" > <br>
			Click em Sair para retornar<br>
			<a href="?sair">sair</a>
            <?php
               if(isset($_REQUEST['sair'])){	
	           session_destroy();
	            header("Location: index.php");	
	          }
             ?>
		</form>
	</header>
	<!-- MENU -->
	<nav id="menu1">
	 <ul>
	    <li id="menu"><h2> Manipulação de Produtos<h2> </li>
		<li id="menu"><a id="menu1.1" href="index.html" title="Home">Exibir</a> </li>
		<li method="post" id="menu"><a  id="menu1.2" href="?incluir" title="Notebooks">Inserir</a> <?php
               if(isset($_REQUEST['incluir'])){	
	           session_destroy();
	            header("Location: Incluir.php");	
	          }
             ?> </li>
		<li id="menu"><a id="menu1.3" href="?excluir">Excluir</a> <?php
               if(isset($_REQUEST['excluir'])){	
	           session_destroy();
	            header("Location: excluir.php");	
	          }
             ?></li>
		<li id="menu"><a id="menu1.4" href="?editar">Editar</a> <?php
               if(isset($_REQUEST['editar'])){	
	           session_destroy();
	            header("Location: editar.php");	
	          }
             ?></li>
	 </ul>
	</nav>
	<section id="secao1">
		<!-- DADOS PESSOAIS-->
	<form method="post">
	<fieldset id="usuario">
		<legend>Descreva o produto que deseja excluir</legend>
		<table>
			<tr>
				<td><label for="nome">Descrição: </label></td><td>
					<input id="nome" type="text" required name="descricao" pattern>
				</td></tr><br><br>
		</table>
		        <div >
                     <button type="submit" id="excluir" >Excluir</button>
                 </div>
	</fieldset>
     </section>

	
	<div></div>
		<footer id="rodape1">
		<p>Desenvolvido por: André S. & Romen D.</p>
		<p>Contato: <a href="mailto:someone@example.com">andre@email.com</a>.</p>
		<p>Contato: <a href="mailto:someone@example.com">romen@email.com</a>.</p>
		<p>Criado em: 20 de maio de 2016.</p>
		<p>Atualizado em: 27 de maio de 2016.</p>
	</footer> 

	</div>
</body>
</html>