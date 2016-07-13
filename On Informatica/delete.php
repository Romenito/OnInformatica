<?php session_start();

$link = @mysql_connect("localhost", "root", "")
or die ('Erro: '. mysql_error());
mysql_select_db("oninformatica");

@$id = $_POST['id_produto'];
 
// Selecionando nome da foto do usuário
$sql = mysql_query("SELECT imagem FROM produto WHERE id = '".$id."'");
$produto = mysql_fetch_object($sql);

// Removendo usuário do banco de dados
$sql = mysql_query("DELETE FROM produto WHERE id = '".$id."'");

// Removendo imagem da pasta fotos/
$temp = unlink("img/".$produto->imagem."");
if($temp == 1){
    echo "<script>alert('Produto deletado!');</script>";
    header("refresh: 1; url=admin.php");
} else {
    echo "<script>alert('Erro na remoção do produto!');</script>";
    header("refresh: 1; url=admin.php");
}