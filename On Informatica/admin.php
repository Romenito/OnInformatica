<?php
session_start();
include 'conn.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" type="image/ico" href="img/logo.ico" >
        <title>ON Informática | Admin</title>
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
                    <li id="menu"><a id="menu1.1" href="?admin" title="Home"><h2> Manipulação de Produtos<h2> </a>
                        <?php
                            if(isset($_REQUEST['admin'])){	
                                header("Location: admin.php");	
                            }
                        ?>                    
                    </li>
                    <li id="menu"><a id="menu1.1" href="?exibir" title="Listagem de produtos">Lista de Produtos</a>
                        <?php
                            if(isset($_REQUEST['exibir'])){	
                                header("Location: exibir.php");	
                            }
                        ?>
                    </li>
                    <li id="menu"><a  id="menu1.2" href="?incluir" title="Inserir produto">Inserir</a>
                        <?php
                            if (isset($_REQUEST['incluir'])) {
                                header("Location: incluir.php");
                            }
                        ?>
                    </li>
                    <li id="menu"><a id="menu1.3" href="?editar" title="Editar produto">Editar</a>
                        <?php
                            if (isset($_REQUEST['editar'])) {
                                header("Location: editar.php");
                            }
                        ?>
                    </li>
                    <li id="menu"><a id="menu1.4" href="?excluir" title="Excluir produto">Excluir</a>
                        <?php
                            if (isset($_REQUEST['excluir'])) {
                                header("Location: excluir.php");
                            }
                        ?>
                    </li>
                </ul>
            </nav>
            <section id="secao1">
                <h1>Olá <?php echo $secao_usuario; ?>!</h1> <br>
                <h1> SEJA BEM VINDO AO PAINEL ADMINISTRATIVO DA ON INFORMÁTICA</h1><br>
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