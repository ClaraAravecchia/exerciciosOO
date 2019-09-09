<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>
</head>
<body>
    <form action="exibe1.php" method="POST">
        <?php
            include ("cabecalho.php");
            if(empty($_POST)){
                echo "<p><label>Nome:</label>";
                echo "<input type=\"text\" name=\"nome\"/></p>";

                echo "<p><label>Email:</label>";
                echo "<input type=\"email\" name=\"email\" /></p>";

                echo "<p><label>CPF:</label>";
                echo "<input type=\"text\" name=\"cpf\" /></p>";
                
                echo "<p><label>Sexo:</label>";
                echo "<input type=\"radio\" name=\"sexo\" value=\"Masculino\"/>Masculino
                <input type=\"radio\" name=\"sexo\" value=\"Feminino\"/>Feminino</p>";
                
                echo "<p><label>Data Nasc::</label>";
                echo "<input type=\"date\" name=\"data_nascimento\" /></p>";

                echo "<p><label></label>";
                echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
            }
            
        ?>
    </form>
</body>
</html>