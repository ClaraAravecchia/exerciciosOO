<?php
	require_once("../classeLayout/classeCabecalhoHTML.php");
	require_once("cabecalho.php");
	require_once("../classeLayout/classeTabela.php");
	
	require_once("conexao.php");
	require_once("classeControllerBD.php");
	
	require_once("configuracoes_listar.php");
	
	if($_GET["t"]=="regiao"){
		require_once("form_regiao.php");
	}
	
	$c = new ControllerBD($conexao);
	
	$r = $c->selecionar($colunas,$t,null,null," LIMIT 0,5");
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz,$t[0][0]);
	$t->exibe();




?>