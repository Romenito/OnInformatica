<?php
session_start();
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
                <form action="update2.php" method="post" enctype="multipart/form-data" name="atualizacao">
                    <fieldset id="usuario">
                        <legend>Atualize as informações do produto</legend>
                        <?php
                        include 'conn.php';
                        $id = $_POST['id_produto'];
                        $sql = mysqli_query($conn, "SELECT * FROM produto WHERE id = '" . $id . "'");
                        $produto = mysqli_fetch_object($sql);
                        echo "
                            <table>
                                <td><label for='nome'>Nome: </label></td><td>
                                    <input id='nome' type='text' name='nome' value='" . $produto->nome . "'></td><td>
                                    <label for='id'>ID:</label><input id='id' type='text' name='id' readonly='true' size='3px' value='" . $produto->id . "'></td>
                                <br><br>
                                </td></tr>
                            <tr><td><label for='sobrenome'>Descrição: </label></td><td>
                                    <input id='descricao' type='text' name='descricao' value='" . $produto->descricao . "'><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Imagem: </label></td><td>
                                    <img src='img/" . $produto->imagem . "' alt='Foto de exibição' style='width:90px; height:90px;'/><br>
                                    <input type='file' name='imagem' /><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for='preco'>Preço: </label></td><td>
                                    <input id='preco' type='number' name='preco' value='" . $produto->preco . "'><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Promoção:</label></td><td>
                                <input id='sim' type='radio' name='promocao' value='sim' required='true'/>Sim
                                <input id='nao' type='radio' name='promocao' value='nao' required='true' checked/>Não<br><br>                             
                                </td>
                            <tr>	
                                <td><label>Desconto:</label></td><td>
                                    <input id='desconto' type='text' name='desconto' value='" . $produto->desconto . "'>
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
                <p>Desenvolvido por: André S. & Romen D. | Contato: <a href="mailto:someone@example.com">andre@email.com</a>.
                    <a href="mailto:someone@example.com">romen@email.com</a>.</p>
                <p>Criado em: 20 de maio de 2016. Atualizado em: 27 de maio de 2016.</p>
            </footer>
        </div>
    </body>
</html>