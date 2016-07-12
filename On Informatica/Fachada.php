<?php

define("DB_SERVIDOR", "localhost");
define("DB_USUARIO", "root");
define("DB_SENHA", "");
define("DB_BANCO", "oninformatica");

function abrirDB(){
    mysql_connect(DB_SERVIDOR,DB_USUARIO, DB_SENHA);
    mysql_select_db(DB_BANCO);
}

function fecharDB(){
    mysql_close();
}

function select(){
    $aluno = array();
    abrirDB();
    $sql = "select * from aluno";
    $retorno = mysql_query($sql);
    while ($aluno = mysql_fetch_assoc($retorno)) {
        $alunos[] = $aluno;
    }
    fecharDB();
    return $alunos;
}

function delete($id){
    abrirDB();
    $sql = "delete from aluno where idaluno=".$id;
    $retorno = mysql_query($sql);
    if($retorno !== false){
        return TRUE;
    }
    fecharDB();
    return FALSE;
}

function insert($aluno){
    abrirDB();
    $sql = "insert into aluno(nome,email,telefone,altura,aprovado)"
            . "values('".$aluno["nome"]."','".$aluno["email"]."','"
            . $aluno["telefone"]."','".$aluno["altura"]."',".$aluno["aprovado"].")";
    $retorno = mysql_query($sql);
    if($retorno !== false){
        return TRUE;
    }
    fecharDB();
    return FALSE;
}

function selectAluno($id){
    $aluno = array();
    abrirDB();
    $sql = "select * from aluno where idaluno=".$id;
    $retorno = mysql_query($sql);
    $aluno = mysql_fetch_assoc($retorno);
    fecharDB();
    return $aluno;
}

function update($aluno){
    abrirDB();
    var_dump($aluno);
    $sql = "update aluno set nome='".$aluno["nome"]."',email='".$aluno["email"]."', "
            . "telefone='".$aluno["telefone"]."',altura='".$aluno["altura"]."',"
            ."aprovado=".$aluno["aprovado"]. " where idaluno=".$aluno["id"];
    $retorno = mysql_query($sql);
    if($retorno !== false){
        return TRUE;
    }
    fecharDB();
    return FALSE;
}