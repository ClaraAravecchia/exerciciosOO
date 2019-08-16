<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>
</head>
<body>
    <form action="cadastra_produto.php" method="POST">
        <?php
            include ("cabecalho.php");
            if(empty($_POST)){
                echo "<p><label>Nome:</label>";
                echo "<input type=\"text\" name=\"nome\"/></p>";

                echo "<p><label>Descrição:</label>";
                echo "<input type=\"text\" name=\"descricao\" /></p>";
                
                echo "<p><label>Tipo:</label>";
                echo "<input type=\"radio\" name=\"tipo\" value=\"Perecível\"/>Perecível
                <input type=\"radio\" name=\"tipo\" value=\"Não Perecível\"/>Não Perecível</p>";

                echo "<p><label>Unidade:</label>";
                echo "<input type=\"text\" name=\"unidade\" /></p>";
                
                echo "<p><label>Preço</label>";
                echo "<input type=\"number\" name=\"preco\" /></p>";

                echo "<p><label></label>";
                echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
            }
            
        ?>
    </form>
</body>
</html>