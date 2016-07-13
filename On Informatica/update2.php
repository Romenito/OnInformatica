<?php session_start();
 include_once ("/conn.php");
 
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
    $largura = 490;
    $altura = 490;
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
        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }
    // Se não houver nenhum erro
    if (count($error) == 0) {
        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        // Caminho de onde ficará a imagem
        $caminho_imagem = "img/" . $nome_imagem;
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
        // Remover imagem anterior
        $link = @mysql_connect("localhost", "root", "") or die ('Erro: '. mysql_error());
        mysql_select_db("oninformatica");
        $sql_temp = mysql_query("SELECT imagem FROM produto WHERE nome = '".$nome."'");
        $produto = mysql_fetch_object($sql_temp);
        $temp = unlink("img/".$produto->imagem."");
    }
    // Insere os dados no banco
        $sql = mysqli_query($conn, "UPDATE Produto SET nome='{$nome}', descricao='{$descricao}',imagem='{$nome_imagem}', "
        . "preco={$preco}, promocao={$promocao}, desconto={$desconto} WHERE nome='".$nome."' ");
}
else{
        // Insere os dados no banco
        $sql = mysqli_query($conn, "UPDATE Produto SET nome='{$nome}', descricao='{$descricao}', "
        . "preco={$preco}, promocao={$promocao}, desconto={$desconto} WHERE nome='".$nome."' ");
        
        // Se os dados forem inseridos com sucesso
        if ($sql) {
            echo "<script>alert('Produto atualizado com sucesso!');</script>";
            header("refresh: 1; url=editar.php");
        }
    
    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
        foreach ($error as $erro) {
            echo "<script>alert('".$erro."');</script>";
        }
    }
}