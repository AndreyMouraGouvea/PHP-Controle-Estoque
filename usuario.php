<?php
include('conexao.php');
if(isset($_POST['nome'])){
    cadUsuario($_POST['nome'],$_POST['email'],$_POST['login'],$_POST['senha']);
}

if(isset($_GET['list'])){
    $niveis = listNivel();
    $list = array();
    while($n = $niveis->fetch_object()){
        $list[] = $n;
    }
    echo json_encode($list);    
}
if(isset($_GET['id'])){
	delNivel($_GET['id']);
}
?>