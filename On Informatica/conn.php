<?php


$conn = @mysql_connect('localhost','root','')  or die(mysql_error());
$banco = mysql_select_db('oninformatica') or die(mysql_error());

?>