<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeOption.php");
	require_once("../classeForm/classeSelect.php");
	require_once("../classeForm/classeButton.php");
	require_once("../classeForm/classeForm.php");
	include("conexao.php");
	
	$v = array("action"=>"validador_login.php","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"email","name"=>"login","placeholder"=>"login...","value"=>"");
	$f->add_input($v);
	$v = array("type"=>"password","name"=>"senha","placeholder"=>"senha...","value"=>"");
	$f->add_input($v);
	$v = array("type"=>"submit","texto"=>"Logar","id"=>"logar");
	$f->add_button($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>LOGIN</h3>
<hr />
<?php
if(isset($_SESSION["msg_erro"])){
	echo $_SESSION["msg_erro"];
	unset($_SESSION["msg_erro"]);
}
?>
<hr />
<?php
	$f->exibe();
?>
</body>
</html> 
