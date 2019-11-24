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
	

	if(isset($_POST["id"])){
			require_once("classeControllerBD.php");
			$c = new ControllerBD($conexao);
			$colunas = array("id_localizacao","endereco","cep","cidade","estado","id_pais");
			$tabela[0][0]="localizacao";
			$tabela[0][1]=null;
			$ordenacao = null;
			$condicao = $_POST["id"];
			$stmt = $c->selecionar($colunas,$tabela,$ordenacao,$condicao);
			$linha = $stmt->fetch(PDO::FETCH_ASSOC);
			$value_id = $linha["id_localizacao"];
			$value_endereco = $linha["endereco"];
			$value_cep = $linha["cep"];
			$value_cidade = $linha["cidade"];
			$value_estado = $linha["estado"];
			$selected_pais = $linha["id_pais"];
			$action = "altera.php?tabela=localizacao";
			$disabled = true;
		}
		else{
			$disabled = false;
			$value_id = null;
			$value_endereco = null;
			$value_cep = null;
			$value_cidade = null;
			$value_estado = null;
			$selected_pais = null;
			$action = "insere.php?tabela=localizacao";			
		}

	
	
	
	//seleção dos valores que irão criar o <select> de país//////
	$select = "SELECT ID_PAIS AS value, NOME_PAIS AS texto FROM pais ORDER BY NOME_PAIS";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	////////////////////////////////////////////////////

	$v = array("action"=>$action,"method"=>"post");
	$f = new Form($v);

	$v = array("type"=>"number","name"=>"ID_LOCALIZACAO","placeholder"=>"ID...","value"=>$value_id,"disabled"=>$disabled);
	$f->add_input($v);

	if($disabled){
		$v = array("type"=>"hidden","name"=>"ID_LOCALIZACAO","value"=>$value_id);
		$f->add_input($v);
	}
	
	$v = array("type"=>"text","name"=>"ENDERECO","placeholder"=>"ENDEREÇO...","value"=>$value_endereco);
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"CEP","placeholder"=>"CEP...","value"=>$value_cep);
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"CIDADE","placeholder"=>"CIDADE...","value"=>$value_cidade);
	$f->add_input($v);	
	$v = array("type"=>"text","name"=>"ESTADO","placeholder"=>"ESTADO...","value"=>$value_estado);
	$f->add_input($v);
	
	$v = array("name"=>"ID_PAIS","selected"=>$selected_pais);
	$f->add_select($v,$matriz);
	
	
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
<h3>Formulário - Inserir Localização</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>