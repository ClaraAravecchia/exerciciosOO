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
		$gerente[] = $linha;
	}	
    ////////////////////////////////////////////////////
    $select = "SELECT ID_LOCALIZACAO AS value, ENDERECO AS texto FROM LOCALIZACAO ORDER BY ENDERECO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$localizacao[] = $linha;
	}	
	////////////////////////////////////////////////////

	$v = array("action"=>"insere.php?tabela=DEPARTAMENTO","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_DEPARTAMENTO","placeholder"=>"ID DEPARTAMENTO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME_DEPARTAMENTO","placeholder"=>"NOME DO DEPARTAMENTO...");
	$f->add_input($v);
	
	$v = array("name"=>"ID_GERENTE");
    $f->add_select($v,$gerente);
    
    $v = array("name"=>"ID_LOCALIZACAO");
	$f->add_select($v,$localizacao);
	
	
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