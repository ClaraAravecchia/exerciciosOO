<?php
    include("../classeLayout/classeCabecalhoHTML.php");
    include("../cabecalho.php");
    
	
    require_once("../classeForm/InterfaceExibicao.php");
    require_once("../classeForm/classeInput.php");
    require_once("../classeForm/classeForm.php");
    require_once("../classeForm/classeSelect.php");
    require_once("../classeForm/classeOption.php");
    
    include("../conexao.php");
    $select = "SELECT ID_CIDADE AS value, NOME AS texto FROM CIDADE ORDER BY NOME";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	

    $v = array("action"=>"../INSERE/insere_doador.php","method"=>"post");
	$f = new Form($v);
    
    $v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME DO DOADOR..");
    $f->add_input($v);
    
    $v = array("type"=>"email","name"=>"EMAIL","placeholder"=>"EMAIL...");
    $f->add_input($v);

    //$sexo = array("M", "F");
    //$v = array("name"=>"sexo");
    //$f->add_select($v, $sexo);
    
    $v = array("type"=>"text","name"=>"SEXO","placeholder"=>"SEXO...");
    $f->add_input($v);

    $v = array("name"=>"CIDADE");
    $f->add_select($v,$matriz);
    
    $v = array("type"=>"number","name"=>"VALOR","placeholder"=>"VALOR...");
    $f->add_input($v);
	
	$v = array("type"=>"submit","name"=>"ENVIAR", "value"=>"ENVIAR");
    $f->add_input($v);
    
    //---------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Doador</h3>

<hr/>
<?php

	$f->exibe();

?>
</body>
</html>
</html>
