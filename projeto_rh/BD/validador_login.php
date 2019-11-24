<?php
include("conexao.php");
include("classeControllerBD.php");
$c = new ControllerBD($conexao);
$colunas = array("id_funcionario","nome","sobrenome","permissao");
$tabelas[0][0] = "funcionario";
$tabelas[0][1] = null;
$condicoes[0]["coluna"]="email";
$condicoes[0]["valor"]=$_POST["login"];
$condicoes[1]["coluna"]="senha";
$condicoes[1]["valor"]=$_POST["senha"];
$r = $c->selecionar($colunas,$tabelas,null,$condicoes,null);
$linha = $r->fetch(PDO::FETCH_ASSOC);
if($linha!=null){
	session_start();
	$_SESSION["funcionario"] = $linha;
	header("location: index.php");
}
else{
	header("location: form_login.php");
}
?>  