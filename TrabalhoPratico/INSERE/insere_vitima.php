<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("../cabecalho.php");	
	
include("../conexao.php");

if(!empty($_POST)){

	$PAIS=$_POST["NOME_PAIS"];
	$ESTADO=$_POST["NOME_EST"];
	$CIDADE=$_POST["NOME_CID"];
    $VITIMA=$_POST["NOME_VIT"];
    $EMAIL=$_POST["EMAIL"];
    $SEXO=$_POST["SEXO"];
    $DATA_NASC=$_POST["DATA_NASC"];  
    $CAT = $_POST["CAT"];
    $DATA = $_POST["DATA_CAT"]  

    $insert = "USE CATASTROFE;
                INSERT INTO PAIS(NOME) VALUES (:pais);
                INSERT INTO ESTADO_PROVINCIA(NOME) VALUES (:estado);
                INSERT INTO CIDADE(NOME) VALUES (:cidade);
                INSERT INTO VITIMA(NOME, EMAIL, SEXO, DATA_NASCIMENTO)
                         VALUES (:nome, :email, :sexo, :data_nasc);
                INSERT INTO CATASTROFE VALUES(:cat, :data)";

	$stmt = $conexao->prepare($insert);

	$stmt->bindValue(":pais",$PAIS);
	$stmt->bindValue(":estado",$ESTADO);
	$stmt->bindValue(":cidade",$CIDADE);
    $stmt->bindValue(":nome",$VITIMA);
    $stmt->bindValue(":email",$EMAIL);
    $stmt->bindValue(":sexo",$SEXO);
    $stmt->bindValue(":data_nasc",$DATA_NASC);
    $stmt->bindValue(":cat",$cat);
    $stmt->bindValue(":data",$DATA);

	$stmt->execute();
	
	echo "Cadastrado com sucesso";
	
}
else{
	header("location: ../FORM/cadastro_vitima.php");
}
?>