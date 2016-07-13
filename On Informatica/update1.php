<?php ?>

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
		<li id="menu"><a id="menu1.1" href="?exibir" title="Home">Exibir</a><?php
                if(isset($_REQUEST['exibir'])){	
	            session_destroy();
	            header("Location: exibir.php");	
	          } ?></li>
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
                <form action="update2.php" method="post" enctype="multipart/form-data" name="atualizacao">
                    <fieldset id="usuario">
                        <legend>Atualize as informações do produto</legend>
                        <?php session_start();
                        include 'conn.php'; 
                        $nome = $_POST['nome_produto']; 
                        $sql = mysqli_query($conn, "SELECT * FROM produto WHERE nome = '" . $nome . "'");
                        $produto = mysqli_fetch_object($sql);
                                                                
                        echo "<table>
                            <tr>
                                <td><label for='nome'>Nome: </label></td><td>
                                    <input id='nome' type='text' name='nome' value='".$produto->nome."'><br><br>
                                </td></tr>
                            <tr><td><label for='sobrenome'>Descrição: </label></td><td>
                                    <input id='descricao' type='text' name='descricao' value='".$produto->descricao."'><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Imagem: </label></td><td>
                                    <img src='img/".$produto->imagem."' alt='Foto de exibição' style='width:90px; height:90px;'/><br>
                                    <input type='file' name='imagem' /><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for='preco'>Preço: </label></td><td>
                                    <input id='preco' type='number' name='preco' value='".$produto->preco."'><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Promoção:</label></td><td>
                                    <input id='promocao' type='checkbox' name='promocao' value='".$produto->promocao."'><br><br>
                                </td>
                            <tr>	
                                <td><label>Desconto:</label></td><td>
                                    <input id='desconto' type='text' name='desconto' value='".$produto->desconto."'>
                                </td>
                            </tr>
                        </table>
                        <div >
                            <button type='submit' id='salvar'>Salvar</button>
                        </div>";
                        ?>   
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