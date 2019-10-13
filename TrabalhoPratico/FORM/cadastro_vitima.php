<?php
    include("../classeLayout/classeCabecalhoHTML.php");
    include("../cabecalho.php");
    
	
    require_once("../classeForm/InterfaceExibicao.php");
    require_once("../classeForm/classeInput.php");
    require_once("../classeForm/classeForm.php");
    
    include("../conexao.php");
    

    $v = array("action"=>"../INSERE/insere_vitima.php","method"=>"post");
	$f = new Form($v);

	$v = array("type"=>"text","name"=>"NOME_PAIS","placeholder"=>"NOME DO PAÍS...");
    $f->add_input($v);
    
    $v = array("type"=>"text","name"=>"NOME_EST","placeholder"=>"NOME DO ESTADO...");
    $f->add_input($v);
    
    $v = array("type"=>"text","name"=>"NOME_CID","placeholder"=>"NOME DA CIDADE..");
    $f->add_input($v);
    
    $v = array("type"=>"text","name"=>"NOME_VIT","placeholder"=>"NOME DA VITIMA..");
    $f->add_input($v);
    
    $v = array("type"=>"email","name"=>"EMAIL","placeholder"=>"EMAIL...");
    $f->add_input($v);

    //$sexo = array("M", "F");
    //$v = array("name"=>"sexo");
    //$f->add_select($v, $sexo);
    
    $v = array("type"=>"text","name"=>"SEXO","placeholder"=>"SEXO...");
    $f->add_input($v);
    
    $v = array("type"=>"date","name"=>"DATA_NASC","placeholder"=>"DATA_NASC...");
    $f->add_input($v);
    

    $v = array("type"=>"text","name"=>"CAT","placeholder"=>"CATÁSTROFE...");
    $f->add_input($v);

    $v = array("type"=>"date","name"=>"DATA_CAT","placeholder"=>"DATA CATÁSTROFE...");
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
<h3>Formulário - Inserir Vítima</h3>

<hr/>
<?php

	$f->exibe();

?>
</body>
</html>
</html>
