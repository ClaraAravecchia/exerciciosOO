<?php

	require_once("../classeForm/classeInput.php");
	
	require_once("../classeForm/classeForm.php");
	
	require_once("../classeForm/classeButton.php");

if(isset($_POST["id"])){
	$c = new ControllerBD($conexao);
	$colunas=array("id_regiao","nome_regiao");
	$tabelas[0][0]="regiao";
	$tabelas[0][1]=null;
	$ordenacao = null;
	$condicao = $_POST["id"];
	
	$stmt = $c->selecionar($colunas,$tabelas,$ordenacao,$condicao);
	$linha = $stmt->fetch(PDO::FETCH_ASSOC);
	$value_id_regiao = $linha["id_regiao"];
	$value_nome_regiao = $linha["nome_regiao"];
	$action = "altera.php?tabela=regiao";
}
else{
	$action = "insere.php?tabela=regiao";
	$value_id_regiao="";
	$value_nome_regiao="";
}

	$v = array("action"=>$action,"method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_REGIAO","placeholder"=>"ID DA REGIÃO...","value"=>$value_id_regiao);
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME_REGIAO","placeholder"=>"NOME DA REGIÃO...","value"=>$value_nome_regiao);
	$f->add_input($v);	
	$v = array("type"=>"button","class"=>"cadastrar","texto"=>"CADASTRAR");
	$f->add_button($v);	
?>
<h3>Formulário - Inserir Região</h3>
<div id="status"></div>
<hr />
<?php
	$f->exibe();

?>
<script>
	<?php // variavel criada um JS usando PHP
		if($_SESSION["funcionario"]["permissao"] == 2){
			echo "permissao=2";
		}
		else{
			echo "permissao=1";
		}
	?>
	pagina_atual = 0;
	//quando o documento estiver pronto...
	$(function(){
		
		carrega_botoes();
		
		function carrega_botoes(){
			
			$.ajax({
				url: "quantidade_botoes.php",
				type: "post",
				data: {tabela: "regiao"},
				success: function(q){
					console.log(q);
					$("#botoes").html("");
					for(i=1;i<=q;i++){
						botao = " <button type='button' class='pg'>" + i + "</button>";
						$("#botoes").append(botao);
					}
				}
			});
		}

		$(document).on("click", ".remover", function(){
			id_remover = $(this).val();

			$.ajax({
				url: "remover.php",
				type: "post",
				data: {
					id: id_remover,
					tabela: "regiao"
				},
				success: function(d){
					if(d == 1){
						$("#status").html("Removido com sucesso");
						carrega_botoes();
						qtd = $("tbody tr").length;
						if(qtd == "1"){
							pagina_atual--;
						}
						paginacao(pagina_atual);
					}
					else if(d == '0'{
						$('#status').html("Você não tem permissão para remover.")
					}
					else if(d == "-1"){
						$('#status').html("Você não está logado.")
					}
				}
			});
		});
		
		$(document).on("click",".pg",function(){
			valor_botao = $(this).html();
			pagina_atual = valor_botao;
			paginacao(valor_botao);
		});
		
		function paginacao(b){
			$.ajax({
				url: "carrega_dados.php",
				type: "post",
				data: {
						tabelas:{
									0:{0:"regiao",1:null}
								},
						colunas:{0:"id_regiao",1:"nome_regiao"}, 
						pagina: b
					  },
				success: function(matriz){
					$("tbody").html("");
					for(i=0;i<matriz.length;i++){
						tr = "<tr>";
						tr += "<td>"+matriz[i].id_regiao+"</td>";
						tr += "<td>"+matriz[i].nome_regiao+"</td>";
						if(permissao = "2"){
							tr += "<td><button value='"+matriz[i].id_regiao+"' class='remover'>Remover</button>";
							tr += "<button value='"+matriz[i].id_regiao+"' class='alterar'>Alterar</button></td>";
							tr += "</tr>";	
							$("tbody").append(tr);
						}
					}
				}
			});
		}
		
		$(document).on("click",".alterar",function(){
		//$(".alterar").click(function(){ 
			id_alterar = $(this).val();			
			$.ajax({
				url: "get_dados_form.php",
				type: "post",
				data: {id: id_alterar, tabela: "regiao"},
				success: function(dados){
					$("input[name='ID_REGIAO']").val(dados.ID_REGIAO);
					$("input[name='NOME_REGIAO']").val(dados.NOME_REGIAO);
					$(".cadastrar").attr("class","alterando");
					$(".alterando").html("ALTERAR");
				}
			});
		});
			
			$(document).on("click",".alterando",function(){
				
				$.ajax({
					url:"altera.php?tabela=regiao",
					type: "post",
					data: {
						ID_REGIAO: $("input[name='ID_REGIAO']").val(),
						NOME_REGIAO: $("input[name='NOME_REGIAO']").val()
					 },
					beforeSend:function(){
						$("button").attr("disabled",true);
					},
					success: function(d){
						$("button").attr("disabled",false);
						if(d=='1'){
							$("#status").html("Região Alterada com sucesso!");
							$("#status").css("color","green");
							$(".alterando").attr("class","cadastrar");
							$(".cadastrar").html("CADASTRAR");
							$("input[name='ID_REGIAO']").val("");
							$("input[name='NOME_REGIAO']").val("");
							paginacao(pagina_atual);
						}
						else{
							console.log(d);
							$("#status").html("Região Não Alterada! Código já existe!");
							$("#status").css("color","red");
						}
					}
				});
			});
			
			//defina a seguinte regra para o botao de envio
			$(document).on("click",".cadastrar",function(){
			
			$.ajax({
				url: "insere.php?tabela=regiao",
				type: "post",
				data: {
						ID_REGIAO: $("input[name='ID_REGIAO']").val(),
						NOME_REGIAO: $("input[name='NOME_REGIAO']").val()
					 },
				beforeSend:function(){
					$("button").attr("disabled",true);
				},
				success: function(d){
					$("button").attr("disabled",false);
					if(d=='1'){
						$("#status").html("Região inserida com sucesso!");
						$("#status").css("color","green");
						carrega_botoes();
						paginacao(pagina_atual);
					}
					else{
						console.log(d);
						$("#status").html("Região Não inserida! Código já existe!");
						$("#status").css("color","red");
					}
				}
			});
		});
		
	});
</script>
</body>
</html>
</html>