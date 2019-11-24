<?php
	//include("../classeLayout/classeCabecalhoHTML.php");
	//include("cabecalho.php");
	

	
include("conexao.php");
if ($_SESSION["funcionario"]["permissao"] == "2"){
	if(!empty($_POST)){

		include("classeControllerBD.php");
		
		$c = new ControllerBD($conexao);
		
		$c->inserir($_POST,$_GET["tabela"]) or die("0");
		echo "1";
	}
} 
else{
	echo "0";
}

/*else{
	header("location: form_pais.php");
}*/
?>