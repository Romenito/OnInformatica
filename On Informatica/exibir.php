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
            <nav id="menu1" >
                <ul>
                    <li id="menu"><h2> Manipulação de Produtos<h2> </li>
                                <li id="menu"><a id="menu1.1" href="?exibir" title="Home">Exibir</a> <?php
                                    if (isset($_REQUEST['exibir'])) {
                                        session_destroy();
                                        header("Location: exibir.php");
                                    }
                                    ?>
                                </li>
                                <li method="post" id="menu"><a  id="menu1.2" href="?incluir" title="Notebooks">Inserir</a>
                                    <?php
                                    if (isset($_REQUEST['incluir'])) {
                                       // session_destroy();
                                        header("Location: incluir.php");
                                    }
                                    ?>
                                </li>
                                <li id="menu"><a id="menu1.3" href="?excluir">Excluir</a>
                                    <?php
                                    if (isset($_REQUEST['excluir'])) {
                                       // session_destroy();
                                        header("Location: excluir.php");
                                    }
                                    ?>
                                </li>
                                <li id="menu"><a id="menu1.4" href="?editar">Editar</a>
                                    <?php
                                    if (isset($_REQUEST['editar'])) {
                                      //  session_destroy();
                                        header("Location: editar.php");
                                    }
                                    ?>
                                </li>
                </ul>
                </nav>
            <section id="secao2">
                <form name="listagem">
                    <fieldset id="usuario">
                        <legend>Lista de Produtos Cadastrados</legend>
                        <?php
                        include 'conn.php';
                        $sql = mysqli_query($conn, "SELECT * FROM produto");
                        echo "<table border='1' cellspacing=0 cellpadding=5><tr><td><strong>Código:</strong></td>"
                            . "<td><strong>Nome:</strong></td>"
                            . "<td><strong>Descricao:</strong></td>"
                            . "<td><strong>Imagem:</strong></td>"
                            . "<td><strong>Preço:</strong></td>"
                            . "<td><strong>Promoção:</strong></td>"
                            . "<td><strong>Desconto:</strong></td></tr><br></table";
                        while ($produto = mysqli_fetch_object($sql)) {
                            // A tag <tr> abre uma linha, <td> abre uma célula.
                            echo "<table><tr><td>".$produto->id."</td>"
                                . "<td>".$produto->nome."</td>"
                                . "<td>".$produto->descricao."</td>"
                                . "<td><img src='img/".$produto->imagem."' alt='Foto do produto' style='width:90px; height:90px;/>'</td>"
                                . "<td>".$produto->preco."</td>"
                                . "<td>".$produto->promocao."</td>"
                                . "<td>".$produto->desconto."</td></tr></table";
                        }
                        ?>  
                    </fieldset>
            </section>
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
