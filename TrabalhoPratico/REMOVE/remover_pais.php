<?php
	include("../../classeLayout/classeCabecalhoHTML.php");
	$c = new CabecalhoHTML();
	$c->exibe();
	
	include("../conexao.php");
	
	$ID_PAIS = $_POST["ID_PAIS"];
	
	$delete = "DELETE FROM PAIS WHERE ID_PAIS=:id_pais";
	
	$stmt = $conexao->prepare($delete);
	

	$stmt->bindValue(":id_pais",$ID_PAIS);


	$stmt->execute();

	
	
	echo "País removido com sucesso!";
	
?>
<hr />
<a href='../LISTA/lista_pais.php'>Voltar Para a listagem</a>
</body>
</html>