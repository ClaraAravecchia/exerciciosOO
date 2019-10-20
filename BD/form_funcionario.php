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
	$select = "SELECT ID_FUNCAO AS value, TITULO_FUNCAO AS texto FROM FUNCAO ORDER BY TITULO_FUNCAO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$funcao[] = $linha;
	}	
	///////////////////////////////////////////////////////////////////////
	$select = "SELECT ID_FUNCIONARIO AS value, SOBRENOMENOME AS texto FROM FUNCIONARIO ORDER BY SOBRENOMENOME";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$gerente[] = $linha;
	}	
	//////////////////////////////////////////////////////////////////////
	$select = "SELECT ID_DEPARTAMENTO AS value, NOME_DEPARTAMENTO AS texto FROM DEPARTAMENTO ORDER BY NOME_DEPARTAMENTO";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$departamento[] = $linha;
	}	
	//////////////////////////////////////////////////////////////////////
	$v = array("action"=>"insere.php?tabela=FUNCIONARIO","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_FUNCIONARIO","placeholder"=>"ID DO FUNCIONÁRIO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME...");
    $f->add_input($v);
    
    $v = array("type"=>"email","name"=>"EMAIL","placeholder"=>"EMAIL...");
    $f->add_input($v);
    
    $v = array("type"=>"number","name"=>"TELEFONE","placeholder"=>"TELEFONE...");
    $f->add_input($v);
    
    $v = array("type"=>"date","name"=>"DATA_CONTRATACAO","placeholder"=>"DATA DA CONTRATACAO...");
    $f->add_input($v);
    
    $v = array("name"=>"ID_FUNCAO");
    $f->add_select($v, $funcao);
    
    $v = array("type"=>"number","name"=>"COMISSAO","placeholder"=>"COMISSÃO...");
    $f->add_input($v);
    
    $v = array("name"=>"ID_GERENTE");
    $f->add_select($v, $gerente);
    
    $v = array("name"=>"ID_DEPARTAMENTO");
    $f->add_select($v, $departamento);

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
<h3>Formulário - Inserir Funcionário</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
