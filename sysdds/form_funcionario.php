<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <form action="cadastra_funcionario.php" method="POST">
        <?php
            include ("cabecalho.php");
            echo " <h2>Cadastro de Funcionário</h2>";
            include ("form_pessoa.php");
            
            echo "<p><label>Área:</label>";
            echo "<input type=\"text\" name=\"area\"/></p>";

            echo "<p><label>Salário:</label>";
            echo "<input type=\"number\" name=\"salario\" /></p>";

            echo "<p><label>Turno:</label>";
            echo "<input type=\"text\" name=\"turno\" /></p>";
            
            echo "<p><label></label>";
            echo "<input type=\"submit\"  value=\"Enviar\"/></p>";  
            
            
        ?>
    </form>
</body>
</html>