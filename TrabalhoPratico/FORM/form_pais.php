<?php
    include("../classeLayout/classeCabecalhoHTML.php");
    include("../cabecalho.php");
    
	
    require_once("../classeForm/InterfaceExibicao.php");
    require_once("../classeForm/classeInput.php");
    require_once("../classeForm/classeForm.php");
    
    

    include("../conexao.php");
    

    $select = "SELECT ID_PAIS, NOME FROM PAIS ORDER BY NOME";
    

    $stmt = $conexao->prepare($select);
    $stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
    }	
    //---------------------------------------------------------

    $v = array("action"=>"insere_pais.php","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME DO PAÍS...");
	$f->add_input($v);
	echo "hello";
	$v = array("type"=>"submit","name"=>"ENVIAR","value"=>"ENVIAR");
	$f->add_input($v);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir País</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>