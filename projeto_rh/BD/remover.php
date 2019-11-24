<?php
	session_start();

	if(isset($_SESSION["funcionario"]["permissao"])){
		if($_SESSION["funcionario"]["permissao"] == 2){
			include("../classeLayout/classeCabecalhoHTML.php");
			include("cabecalho.php");
			
			include("conexao.php");
			include("classeControllerBD.php");
			$ctrl = New ControllerBD($conexao);
			$ctrl->remover($_POST["id"],$_POST["tabela"]);
			echo "1";
		}
		else{
			echo "0";
		}
		else{
			echo "-1";
		}
	}
	

?>
<hr />
<a href='lista_<?=$_POST["tabela"];?>.php'>Voltar Para a listagem</a>
</body>
</html>