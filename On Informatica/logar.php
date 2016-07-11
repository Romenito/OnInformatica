<?php
if(isset($_REQUEST['logar'])){
$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];
 
$sql = "SELECT * FROM usuario WHERE login ='$usuario' AND senha = '$senha' ";
$query = mysql_query($sql) or die(mysql_error());
$qtda  = mysql_num_rows($query);
if($qtda == 0){
	echo 'Usuario ou Senha incorretos';	
	}else{		
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;		
		header("Location: admin.php");		
		}
}
?>
 