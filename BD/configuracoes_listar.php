<?php
if(isset($_GET["t"])){
	if($_GET["t"]==strtolower("REGIAO")){
		
		$colunas = array(   "ID_REGIAO as ID","NOME_REGIAO as 'Região'");				
				$t[0][0] = "REGIAO";
				$t[0][1] = null;
	}
	
	else if($_GET["t"]==strtolower("PAIS")){
		
		$colunas = array(   "ID_PAIS as ID",
									"NOME_PAIS as 'País'",
									"NOME_REGIAO as 'Região'");				
				$t[0][0] = "PAIS";
				$t[0][1] = "REGIAO";
	}
	
	else if($_GET["t"]==strtolower("LOCALIZACAO")){
		
		$colunas = array(   "ID_LOCALIZACAO as ID",
									"ENDERECO as 'ENDEREÇO'",
									"CEP as 'CEP'",
									"CIDADE as 'CIDADE'",
									"ESTADO as 'ESTADO'",
									"NOME_PAIS as 'PAÍS'",
									"NOME_REGIAO as 'REGIÃO'"
									);				
				$t[0][0] = "LOCALIZACAO";
				$t[0][1] = "PAIS";
				$t[1][0] = "PAIS";
				$t[1][1] = "REGIAO";
	}
	
	else if($_GET["t"]==strtolower("FUNCAO")){
		
		$colunas = array(   "ID_FUNCAO as ID",
							"TITULO_FUNCAO as 'Função'",
							"SALARIO_MINIMO as 'Salário Mínimo'",
							"SALARIO_MAXIMO as 'Salário Máximo'");				
				$t[0][0] = "FUNCAO";
				$t[0][1] = null;
	}
	
	else if($_GET["t"]==strtolower("FUNCIONARIO")){
		
		$colunas = array(  "FUNCIONARIO.ID_FUNCIONARIO as ID",						   
							"FUNCIONARIO.NOME as 'NOME'",
							"FUNCIONARIO.SOBRENOME as 'SOBRENOME'",
							"FUNCIONARIO.EMAIL as 'EMAIL'",
							"FUNCIONARIO.TELEFONE as 'TELEFONE'",
							"FUNCIONARIO.DATA_CONTRATACAO as 'DATA CONTRATAÇÃO'",
							"FUNCIONARIO.SALARIO as 'SALÁRIO'",
							"FUNCIONARIO.COMISSAO as 'COMISSÃO'",
							"FUNCAO.TITULO_FUNCAO as 'FUNÇÃO'",
							"GERENTE.NOME as 'NOME GERENTE'"
							);				
				$t[0][0] = "FUNCIONARIO";
				$t[0][1] = "GERENTE";
				$t[1][0] = "FUNCIONARIO";
				$t[1][1] = "FUNCAO";
	}	
	else if($_GET["t"]==strtolower("DEPARTAMENTO")){
			$colunas = array(   "ID_DEPARTAMENTO as ID",
									"NOME_DEPARTAMENTO AS 'NOME DO DEPARTAMENTO'",
									"Endereco as 'Endereço'",
									"CEP",
									"CIDADE",
									"ESTADO",
									"NOME_PAIS as 'País'",
									"NOME_REGIAO as 'Região'");
				
				$t[0][0] = "DEPARTAMENTO";
				$t[0][1] = "LOCALIZACAO";
				$t[1][0] = "LOCALIZACAO";
				$t[1][1] = "PAIS";
				$t[2][0] = "PAIS";
				$t[2][1] = "REGIAO";
	}
	else if($_GET["t"]==strtolower("HISTORICO_FUNCOES")){
		$colunas = array(   "HISTORICO_FUNCOES.ID_FUNCIONARIO as ID",
								"HISTORICO_FUNCOES.DATA_INICIAL AS 'DATA INICIAL'",
								"HISTORICO_FUNCOES.DATA_FINAL as 'DATA FINAL'",
								"FUNCAO.TITULO_FUNCAO as 'FUNCAO'",
								"DEPARTAMENTO.ID_DEPARTAMENTO as 'DEPARTAMENTO'");
			
			$t[0][0] = "HISTORICO_FUNCOES";
			$t[0][1] = "FUNCAO";
			$t[1][0] = "HISTORICO_FUNCOES";
			$t[1][1] = "DEPARTAMENTO";

}
	
}
?>