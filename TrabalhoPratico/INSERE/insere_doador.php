<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("../cabecalho.php");	
	
include("../conexao.php");

if(!empty($_POST)){

    $NOME=$_POST["NOME"];
    $EMAIL=$_POST["EMAIL"];
    $SEXO=$_POST["SEXO"];
    $CIDADE=$_POST["CIDADE"];
    $VALOR = $_POST["VALOR"];

    number_format($VALOR, 2);

   
    echo is_float($VALOR);

    $insert = "USE CATASTROFE;
                INSERT INTO DOADOR(NOME, EMAIL, SEXO, COD_CIDADE) VALUES (:nome, :email, :sexo, :cidade);
                INSERT INTO DOACAO(VALOR, COD_CATASTROFE, COD_DOADOR) VALUES( :valor,
                    (SELECT MAX(ID_CATASTROFE) FROM CATASTROFE),
                    (SELECT MAX(ID_DOADOR) FROM DOADOR)
                    )";

	$stmt = $conexao->prepare($insert);

    $stmt->bindValue(":nome",$NOME);
    $stmt->bindValue(":email",$EMAIL);
    $stmt->bindValue(":sexo",$SEXO);
    $stmt->bindValue(":cidade",$CIDADE);
    $stmt->bindValue(":valor",$VALOR);

	$stmt->execute();
	
	echo "Cadastrado com sucesso";
	
}
else{
	header("location: ../FORM/cadastro_doador.php");
}
?>