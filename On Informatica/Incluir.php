<?php
session_start();
include 'conn.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" type="image/ico" href="img/logo.ico" >
        <title>ON Informática | Incluir</title>
    </head>
    <body id="corpo" onload="myFunction()">
	<div id="interface">
            <?php	
            $secao_usuario = $_SESSION['usuario'];
            $secao_senha = $_SESSION['senha'];
            ?>
            <header id="cabecalho">
                <form>
                    <h1 id="nome-empresa">ON Informática</h1>
                    <h2 id="slogan" >Segurança em sua compra Online</h2>
                </form>
                <form id="login"  method="post" >
                    <h6>Olá <?php echo $secao_usuario; ?>!</h6> <br>
                    Click em Sair para retornar<br>
                    <a href="?sair">sair</a>
                    <?php
                    if (isset($_REQUEST['sair'])) {
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
                    <li id="menu"><a id="menu1.1" href="?exibir" title="Home">Lista de Produtos</a>
                        <?php
                            if(isset($_REQUEST['exibir'])){	
                                header("Location: exibir.php");	
                            }
                        ?>
                    </li>
                    <li id="menu"><a  id="menu1.2" href="?incluir" title="inserir">Inserir</a>
                        <?php
                            if (isset($_REQUEST['incluir'])) {
                                header("Location: incluir.php");
                            }
                        ?>
                    </li>
                    <li id="menu"><a id="menu1.3" href="?editar">Editar</a>
                        <?php
                            if (isset($_REQUEST['editar'])) {
                                header("Location: editar.php");
                            }
                        ?>
                    </li>
                    <li id="menu"><a id="menu1.4" href="?excluir">Excluir</a>
                        <?php
                            if (isset($_REQUEST['excluir'])) {
                                header("Location: excluir.php");
                            }
                        ?>
                    </li>
                </ul>
            </nav>
            <section id="secao1">
                <!-- DADOS PESSOAIS-->
                <form  action="insert.php" method="post" enctype="multipart/form-data" name="cadastro" >
                    <fieldset id="usuario">
                        <legend>Cadastro de produto</legend>
                        <table>
                            <tr>	
                                <td><label>Tipo:</label></td><td>
                                    <input id="notebook" type="radio" name="tipo_prod" value="notebook" required="true"/> Notebook
                                    <input id="smartphone" type="radio" name="tipo_prod" value="smartphone" required="true"/>Smartphone
                                    <input id="tablet" type="radio" name="tipo_prod" value="tablet" required="true"/>Tablet<br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Nome:</label></td><td>
                                    <input id="nome" type="text" name="nome" required="true"><br><br>
                                </td></tr>
                            <tr><td><label>Descrição: </label></td><td>
                                    <input id="descricao" type="text" name="descricao" required="true"><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Imagem:</label></td><td>
                                    <input type="file" name="imagem" required="true"/>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Preço:</label></td><td>
                                    <input id="preco" type="number" name="preco" required="true"> <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Promoção:</label></td><td>
                                <input id="sim" type="radio" name="promocao" value="sim" required="true"/>Sim
                                <input id="nao" type="radio" name="promocao" value="nao" required="true" checked/>Não<br><br>                             
                                </td>
                            <tr>	
                                <td><label>Valor Promocional:</label></td><td>
                                    <input id="desconto" type="number" name="desconto" ><br><br>
                                </td>
                            </tr>
                        </table><br><br>
                        <div>
                            <button type="submit" name="cadastrar">Salvar</button>
                            <input type="reset" value="Limpar campos" />
                        </div>
                    </fieldset>
                </form>
            </section>
            <div></div>
            <footer id="rodape1">
                <p>Desenvolvido por: André S. & Romen D. | Contato: <a href="mailto:someone@example.com">andre@email.com</a>.
                    <a href="mailto:someone@example.com">romen@email.com</a>.</p>
                <p>Criado em: 20 de maio de 2016. Atualizado em: 27 de maio de 2016.</p>
            </footer> 
        </div>
    </body>
</html>