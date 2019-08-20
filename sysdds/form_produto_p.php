<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>   
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />

</head>
<body>
    <form action="cadastra_produto_p.php" method="POST">
        <?php
            include ("cabecalho.php");
            echo " <h2>Cadastro de Produto Perecível</h2>";
                echo "<p><label>Nome:</label>";
                echo "<input type=\"text\" name=\"nome\"/></p>";

                echo "<p><label>Descrição:</label>";
                echo "<input type=\"text\" name=\"descricao\" /></p>";
                
                echo "<p><label>Unidade:</label>";
                echo "<input type=\"text\" name=\"unidade\" /></p>";
                
                echo "<p><label>Preço</label>";
                echo "<input type=\"number\" name=\"preco\" /></p>";

                echo "<p><label>Validade</label>";
                echo "<input type=\"date\" name=\"validade\" /></p>";

                echo "<p><label></label>";
                echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
            
            
        ?>
    </form>
</body>
</html>