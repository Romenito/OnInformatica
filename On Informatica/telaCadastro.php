<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/salvarCadastro.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" type="image/ico" href="img/logo.ico" />
        <title>ON Informática | Tela de Cadastro</title>
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
                <script type="text/javascript" src="js/altocontraste.js"></script>
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
            <!-- CAMPOS DE CADASTRO -->
            <section  id="formulario">
                <!-- DADOS PESSOAIS-->
                <form method="post">
                    <fieldset id="usuario">
                        <legend>Dados Pessoais</legend>
                        <table>
                            <tr>
                                <td><label for="nome">Nome*: </label></td><td>
                                    <input id="nome" type="text" required name="pnome" pattern="[a-z\s]+$">
                                </td></tr>
                            <tr><td><label for="sobrenome">Sobrenome*: </label></td><td>
                                    <input id="sobrenome" type="text" required name="psobrenome" pattern="[a-z\s]+$">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Nascimento*: </label></td><td>
                                    <input id="cdata" type="date" required name="dataNasc" > 
                                </td>
                            </tr>
                            <tr>
                                <td><label for="rg">RG*: </label></td><td>
                                    <input id="rg" type="text" required name="rg" size="11" maxlength="11" placeholder="12345678-90" pattern="d{8}-\d{2}"> 
                                </td>
                            </tr>
                            <tr>
                                <td><label>CPF*:</label></td><td>
                                    <input id="cpf" type="text" required name="cpf" size="14" maxlength="14" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <!-- ENDEREÇO -->
                    <fieldset id="endereco">
                        <legend>Dados de Endereço</legend>
                        <table>
                            <tr>
                                <td><label for="rua">Rua*:</label></td><td>
                                    <input id="rua" type="text" required name="rua">
                                </td>
                                <td><label for="numero">Numero*:</label></td><td>
                                    <input id="numero" type="text" required name="numero" size="4" pattern="[0-9]+$">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="bairro">Bairro*: </label></td><td>
                                    <input id="bairro" type="text" required name="bairro">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="cidade">Cidade*: </label></td><td>
                                    <input id="cidade" type="text" required name="cidade">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Estado*:</label></td><td>
                                    <input list="estado">
                                    <datalist id="estado">
                                        <option value="Acre">Acre</option> 
                                        <option value="Alagoas">Alagoas</option> 
                                        <option value="Amazonas">Amazonas</option> 
                                        <option value="Amapá">Amapá</option> 
                                        <option value="Bahia">Bahia</option> 
                                        <option value="Ceará">Ceará</option> 
                                        <option value="Distrito Federal">Distrito Federal</option> 
                                        <option value="Espírito Santo">Espírito Santo</option> 
                                        <option value="Goiás">Goiás</option> 
                                        <option value="Maranhão">Maranhão</option> 
                                        <option value="Mato Grosso">Mato Grosso</option> 
                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
                                        <option value="Minas Gerais">Minas Gerais</option> 
                                        <option value="Pará">Pará</option> 
                                        <option value="Paraíba">Paraíba</option> 
                                        <option value="Paraná">Paraná</option> 
                                        <option value="Pernambuco">Pernambuco</option> 
                                        <option value="Piauí">Piauí</option> 
                                        <option value="Rio de Janeiro">Rio de Janeiro</option> 
                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
                                        <option value="Rondônia">Rondônia</option> 
                                        <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
                                        <option value="Roraima">Roraima</option> 
                                        <option value="Santa Catarina">Santa Catarina</option> 
                                        <option value="Sergipe">Sergipe</option> 
                                        <option value="São Paulo">São Paulo</option> 
                                        <option value="Tocantins">Tocantins</option> 
                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="cep">CEP*: </label></td><td>
                                    <input id="cep" type="text" required name="cep" size="9" maxlength="9" placeholder="00000-000" pattern="\d{5}\-\d{3}">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <!-- DADOS DE LOGIN -->
                    <fieldset id="dadosLogin">
                        <legend>Dados de login</legend>
                        <table>
                            <tr>
                                <td><label for="email">E-mail*: </label></td><td>
                                    <input id="emailCad" type="email" required name="email" placeholder="email@examplo.com">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Senha*: </label></td><td>
                                    <input id="senha1.1" type="password" required name="pass" placeholder="8 dígitos" pattern="\d{8}">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Confirme a senha*: </label></td><td id="senha">
                                    <input id="senha2" type="password" required name="passconfirm" placeholder="8 dígitos" pattern="\d{8}">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <h5>* campos obrigatórios.</h5>
                    <input type="image" name="benviar" alt="botão enviar dados cadastro" src="img/botao-enviar.png"><br><br>
                </form>
            </section>
            <!-- RODAPÉ -->
            <footer id="rodape">
                <a id="gotop" href="#" onclick="MGJS.goTop();
                        return false;">Ir para o topo.</a>
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