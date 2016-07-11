<?php

define("DB_SERVIDOR","localhost");
define("DB_USUARIO","root");
define("DB_SENHA","");
define("DB_BANCO","oninformatica");
//define("PASTA_IMAGEM","./img/");

$conn = mysqli_connect(DB_SERVIDOR,DB_USUARIO,DB_SENHA,DB_BANCO)  or die(mysql_error());
//$banco = mysql_select_db(DB_BANCO) or die(mysql_error());
