<?php
$link = @mysql_connect("localhost", "root", "")
or die ('Erro: '. mysql_error());
print ("Connected successfully \n");
mysql_select_db("blog");
print("Banco de dados selecionado com sucesso! \n");

if(isset($_REQUEST['Entrar'])){
$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];
 
$sql = "SELECT * FROM login WHERE usuario ='$usuario' AND senha = '$senha' ";
$query = mysql_query($sql) or die(mysql_error());
$qtda  = mysql_num_rows($query);
if($qtda == 0){
	echo 'Erro ao logar';	
	}else{		
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;		
		header("Location: admin/admin.html");		
		}
}
//$consulta = "select*from livro";
//$resposta = mysql_query($consulta);
//print("Consulta efetuado com sucesso! \n");

//print "<table style=\"border: 2px solid\">";
//while($linha=mysql_fetch_row($resposta)){
	//print "<tr>";
	//print "<td>" . $linha[0] . "</td>";
	//print "<td>" . $linha[1] . "</td>";
	//print "</tr>";
//}
//print "</table>";
//print $linha[0];
//print $linha[1];

//mysql_close($link);
?>