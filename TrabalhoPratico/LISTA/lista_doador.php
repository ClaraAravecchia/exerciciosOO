<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("../cabecalho.php");
	
	include("../conexao.php");
	
	$sql = "SELECT * FROM DOADOR 
                INNER JOIN DOACAO ON ID_DOADOR = COD_DOADOR 
                ORDER BY NOME;";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>NOME</th>
				<th>EMAIL</th>
                <th>SEXO</th>
                <th>CIDADE</th>
                <th>VALOR</th>
                <th>REMOVER</th>
			</tr>
		  </thead>
		  <tbody>
		  ";
	while($linha=$stmt->fetch()){
		echo "<tr>
				<td>".$linha["NOME"]."</td>
				<td>".$linha["EMAIL"]."</td>
                <td>".$linha["SEXO"]."</td>
                <td>".$linha["COD_CIDADE"]."</td>
                <td>".$linha["VALOR"]."</td>
				<td>
                    <form method='post' action='../REMOVE/remover.php'>
                    
						<input type='hidden' name='tabela' value='DOADOR' />
                        <input type='hidden' name='id' value='".$linha["ID_DOADOR"]."' />
						<button>Remover</button>
					</form>
					
				</td>
		      </tr>";
	}
	echo "</tbody>
		</table>";
?>
