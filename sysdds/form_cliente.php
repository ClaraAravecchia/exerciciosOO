<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <form action="cadastra_pessoa.php" method="POST">
        <?php
            include ("cabecalho.php");
            echo " <h2>Cadastro de Cliente</h2>";
            include ("form_pessoa.php");

            echo "<p><label></label>";
            echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
        
            
        ?>
    </form>
</body>
</html>