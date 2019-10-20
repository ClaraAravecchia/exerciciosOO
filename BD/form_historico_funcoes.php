<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeOption.php");
	require_once("../classeForm/classeSelect.php");
    require_once("../classeForm/classeForm.php");
    require_once("../classeForm/classeButton.php");
	

	include("conexao.php");
	
	//seleção dos valores que irão criar o <select>//////
	$select = "SELECT ID_FUNCIONARIO AS value, SOBRENOME AS texto FROM FUNCIONARIO ORDER BY SOBRENOME";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$funcionario[] = $linha;
	}	
    ////////////////////////////////////////////////////
    $select = "SELECT ID_FUNCAO AS value, TITULO_FUNCAO AS texto FROM FUNCAO ORDER BY TITULO_FUNCAO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$funcao[] = $linha;
	}	
    ////////////////////////////////////////////////////
    $select = "SELECT ID_DEPARTAMENTO AS value, NOME_DEPARTAMENTO AS texto FROM DEPARTAMENTO ORDER BY NOME_DEPARTAMENTO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$departamento[] = $linha;
	}	
	//////////////////////////////////////////////////////////////////////

	$v = array("action"=>"insere.php?tabela=HISTORICO_FUNCOES","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_HISTORICO_FUNCOES","placeholder"=>"ID HISTÓRICO...");
	$f->add_input($v);	
	$v = array("name"=>"ID_FUNCIONARIO");
	$f->add_select($v,$funcionario);
	
	$v = array("type"=>"date","name"=>"DATA_INICIAL");
	$f->add_input($v,$funcionario);
	
	$v = array("type"=>"date","name"=>"DATA_FINAL");
    $f->add_input($v,$funcionario);
    
    $v = array("name"=>"ID_FUNCAO");
    $f->add_select($v,$funcao);
    
    $v = array("name"=>"ID_DEPARTAMENTO");
	$f->add_select($v,$departamento);
	
	
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Departamento</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>