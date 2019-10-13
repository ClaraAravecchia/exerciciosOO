<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("../cabecalho.php");
	
	include("../conexao.php");
	include("../classeControllerBD.php");
	$ctrl = New ControllerBD($conexao);
    $ctrl->remover($_POST["id"],$_POST["tabela"]);
    
    $str = strtolower($_POST["tabela"]);

?>
<hr />
<a href='../LISTA/lista_<?=$str;?>.php'>Voltar Para a listagem</a>
</body>
</html>