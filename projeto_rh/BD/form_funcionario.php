<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("conexao.php");
	
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeSelect.php");
	require_once("../classeForm/classeOption.php");
	require_once("../classeForm/classeButton.php");
	require_once("../classeForm/classeForm.php");
	
	//seleção dos valores que irão criar o <select> de FUNCAO//////
	$select = "SELECT ID_FUNCAO AS value, TITULO_FUNCAO AS texto FROM funcao ORDER BY TITULO_FUNCAO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_funcao[] = $linha;
	}	
	////////////////////////////////////////////////////
	
	//seleção dos valores que irão criar o <select> de gerente//////
	$select = "SELECT ID_FUNCIONARIO AS value, CONCAT(SOBRENOME,', ',NOME) AS texto FROM funcionario ORDER BY SOBRENOME, NOME";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_gerente[] = $linha;
	}	
	////////////////////////////////////////////////////	


	////////////////////////////////////////////////////
	
	//seleção dos valores que irão criar o <select> de gerente//////
	$select = "SELECT ID_DEPARTAMENTO AS value, NOME_DEPARTAMENTO AS texto FROM departamento ORDER BY NOME_DEPARTAMENTO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_departamento[] = $linha;
	}	
	////////////////////////////////////////////////////	


	$v = array("action"=>"insere.php?tabela=funcao","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"SOBRENOME","placeholder"=>"SOBRENOME...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"EMAIL","placeholder"=>"EMAIL...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"TELEFONE","placeholder"=>"TELEFONE...");
	$f->add_input($v);
	$v = array("type"=>"date","label"=>"Data Contratação: ", "name"=>"DATA_CONTRATACAO","placeholder"=>"DATA CONTRATAÇÃO...");
	$f->add_input($v);
	
	$v = array("name"=>"ID_FUNCAO","label"=>"Função");
	$f->add_select($v,$matriz_funcao);
	
	$v = array("type"=>"number","name"=>"SALARIO","placeholder"=>"SALÁRIO...");
	$f->add_input($v);

	$v = array("type"=>"number","name"=>"COMISSAO","placeholder"=>"COMISSÃO (DE 0 A 50%)...");
	$f->add_input($v);	

	$v = array("name"=>"ID_GERENTE","label"=>"Gerente");
	$f->add_select($v,$matriz_gerente);

	$v = array("name"=>"ID_DEPARTAMENTO","label"=>"Departamento");
	$f->add_select($v,$matriz_departamento);

	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>

<h3>Formulário - Inserir Funcionário</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>