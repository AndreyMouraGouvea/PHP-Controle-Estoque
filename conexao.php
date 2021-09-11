<?php
header('Access-Control-Allow-Origin: *');
$user = 'eqrldwtf_banco';
$pass = '@integrador21';
$bd = 'eqrldwtf_integrador';
$server = 'localhost';

$conexao = new mysqli($server,$user,$pass,$bd);
if(!$conexao){
    echo "Erro ao conectar com o banco de dados";
}
// usuario ------------------------------------------------
function cadUsuario($nome, $email, $login, $senha, $nivel){
    $sql = 'INSERT INTO tb_usuario VALUES(null, "'.$nome.'","'.$email.'","'.$login.'","'.$senha.'", '.$nivel.')';
    $r = $GLOBALS['conexao']->query($sql);
    if($r){
        echo "Cadastrado com Sucesso";
    }else{
        echo "Erro ao Cadastrar";
    }
}



// níveis --------------------------------------------------
function cadNivel($nome){
    $sql = 'INSERT INTO tb_nivel VALUES(null,"'.$nome.'")';
    $retorno = $GLOBALS['conexao']->query($sql);
    if($retorno){
        echo "Cadastrado com Sucesso!";
    }else{
        echo "Erro ao Cadastrar:".$GLOBALS['conexao']->error;
    }
}

function delNivel($cd){
    $sql = 'DELETE FROM tb_nivel WHERE cd='.$cd;
    $retorno = $GLOBALS['conexao']->query($sql);
    if($retorno){
        echo "Excluido com Sucesso!";
    }else{
        echo "Erro ao excluir:".$GLOBALS['conexao']->error;
    }
}

function listNivel(){
    $sql = 'SELECT * FROM tb_nivel ORDER BY nome';
    $retorno = $GLOBALS['conexao']->query($sql);
    return $retorno;
}

/*************** fim níveis*/


