<?php
session_start();
include 'conn.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/ico" href="img/logo.ico" >
        <title>logar</title>
        <style>
            body{background-image:url(bg.png); padding-top:280px;}
            #formulario{width:350px; height:auto; position:relative; margin:0 auto; overflow:hidden; background-color:#eee; border:solid 2px #ddd; border-radius:5px; padding:25px;}
            label{width:80px; height:30px; position:relative; float:left; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif; font-size:16px; color:#333; line-height:30px; margin:2px;}
            input{width:260px; height:30px; position:relative; float:left; overflow:hidden; border:solid 1px #ddd; border-radius:5px; margin:2px; outline:none;}
            input#logar{width:auto; height:auto; position:relative; float:right; margin:5px; padding:5px; background-color:#333; border:none; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:18px; color:#fff; cursor:pointer;}
        </style>
    </head>
    <body>
        
        <div id="formulario">
            <form name="form" method="post" enctype="multipart/form-data" id="form">
                <label>Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Nome de usuario">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Sua senha">
                <input type="submit" name="logar" id="logar" value="Logar">  
            </form>
            <?php
            if (isset($_REQUEST['logar'])) {
                $usuario = $_REQUEST['usuario'];
                $senha = $_REQUEST['senha'];
                $sql = "SELECT * FROM usuario WHERE login ='$usuario' AND senha = '$senha'";
                $query = mysqli_query($conn, $sql) or die(mysql_error());
                $qtda = mysqli_num_rows($query);
                if ($qtda == 0) {
                    echo 'Usuario e/ou Senha incorretos';
                } else {
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['senha'] = $senha;
                    header("Location: admin.php");
                }
            }
            ?>
        </div>
    </body>
</html>