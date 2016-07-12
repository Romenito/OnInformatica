<?php
session_start();
include 'conn.php';

 //Conexão com o banco de dados
  //$conn = @mysql_connect('localhost','root','')  or die(mysql_error());
  //$banco = mysql_select_db('oninformatica') or die(mysql_error());
 
// Recupera os dados dos campos
@$nome = $_POST['nome'];
@$descricao = $_POST["descricao"];
$imagem = $_FILES["imagem"];
$nome_imagem = $_FILES["imagem"]["name"];
@$preco = (double) $_POST["preco"];
@$desconto = (double) $_POST["desconto"];
@$promocao = (int) $_POST["promocao"];
@$tipo = $_POST["tipo"];
$error = null;

// Se a foto estiver sido selecionada
if (!empty($imagem["name"])) {
    // Largura máxima em pixels
    $largura = 490;
    // Altura máxima em pixels
    $altura = 490;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 600000;

    // Verifica se o arquivo é uma imagem
    if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])) {
        $error[1] = "Isso não é uma imagem.";
    }

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($imagem["tmp_name"]);

    // Verifica se a largura da imagem é maior que a largura permitida
    if ($dimensoes[0] > $largura) {
        $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
    }
    // Verifica se a altura da imagem é maior que a altura permitida
    if ($dimensoes[1] > $altura) {
        $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
    }
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if ($imagem["size"] > $tamanho) {
        $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
    }

    // Se não houver nenhum erro
    if (count($error) == 0) {

        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

        // Gera um nome único para a imagem
        //$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        
        // Caminho de onde ficará a imagem
        $caminho_imagem = "img/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        // Insere os dados no banco
        $sql = mysqli_query($conn, "INSERT INTO Produto (nome, descricao,imagem, preco, promocao, desconto, tipo) "
                . "VALUES ('{$nome}','{$descricao}','{$nome_imagem}',{$preco},{$promocao},{$desconto},'{$tipo}')");
        
        // Se os dados forem inseridos com sucesso
        if ($sql) {
            echo "Produto cadastrado com sucesso!";
            header("refresh: 5; url=admin.php"); //espera 5s e volta pra Admin.php
            //echo "<script>window.location='admin.php';alert('Produto cadastrado com sucesso!');</script>"; //ao confirmar o dialogo volta pra Admin.php
            //ps: ambos perdem o login feito :(
        }
    }
    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
        foreach ($error as $erro) {
            echo $erro . "<br />";
        }
    }
}
?>