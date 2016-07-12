<?php

$link = @mysql_connect("localhost", "root", "")
or die ('Erro: '. mysql_error());
mysql_select_db("oninformatica");

$sql = mysql_query("SELECT * FROM produto");
 
// Exibe as informações de cada usuário
while ($produto = mysql_fetch_object($sql)) {
	// Exibimos a foto
	echo "<img src='img/".$produto->imagem."' alt='Foto de exibição' /><br />";
	// Exibimos o nome e email
	echo "" . $produto->nome . "<br />";
	echo " " . $produto->descricao . "<br /><br />";
	echo "" . $produto->preco . "<br />";
	echo " " . $produto->promocao . "<br /><br />";
	echo "" . $produto->desconto . "<br />";
	echo " " . $produto->tipo . "<br /><br />";
}
?>
