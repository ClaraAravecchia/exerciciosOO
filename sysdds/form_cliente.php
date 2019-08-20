<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>
</head>
<body>
    <form action="cadastra_pessoa.php" method="POST">
        <?php
            include ("cabecalho.php");
            include ("form_pessoa.php");

            echo "<p><label></label>";
            echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
        
            
        ?>
    </form>
</body>
</html>