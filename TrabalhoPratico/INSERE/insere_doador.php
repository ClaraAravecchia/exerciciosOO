<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("../cabecalho.php");	
	
include("../conexao.php");

if(!empty($_POST)){

    $NOME=$_POST["NOME"];
    $EMAIL=$_POST["EMAIL"];
    $SEXO=$_POST["SEXO"];

    $insert = "USE CATASTROFE;
                INSERT INTO DOADOR(NOME, EMAIL, SEXO) VALUES (:nome, :email, :sexo);";

	$stmt = $conexao->prepare($insert);

    $stmt->bindValue(":nome",$NOME);
    $stmt->bindValue(":email",$EMAIL);
    $stmt->bindValue(":sexo",$SEXO);

	$stmt->execute();
	
	echo "Cadastrado com sucesso";
	
}
else{
	header("location: ../FORM/cadastro_doador.php");
}
?>