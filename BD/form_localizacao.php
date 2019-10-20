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
	
	//seleção dos valores que irão criar o <select> de país//////
	$select = "SELECT ID_PAIS AS value, NOME_PAIS AS texto FROM PAIS ORDER BY NOME_PAIS";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	////////////////////////////////////////////////////

	$v = array("action"=>"insere.php?tabela=LOCALIZACAO","method"=>"post");
	$f = new Form($v);

	$v = array("type"=>"number","name"=>"ID_LOCALIZACAO","placeholder"=>"ID DA LOCALIZACAO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"ENDERECO","placeholder"=>"ENDEREÇO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"CEP","placeholder"=>"CEP...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"CIDADE","placeholder"=>"CIDADE...");
	$f->add_input($v);	
	$v = array("type"=>"text","name"=>"ESTADO","placeholder"=>"ESTADO...");
	$f->add_input($v);
	
	$v = array("name"=>"ID_PAIS");
	$f->add_select($v,$matriz);
	
	
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
<h3>Formulário - Inserir Localização</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>