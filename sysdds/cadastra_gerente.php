<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <?php
        include ("classeGerente.php");
        include ("cabecalho.php");       

        $pessoa = new Gerente($_POST);

        session_start();
        $_SESSION["gerente"][] = $pessoa;
        echo "Gerente cadastrado com sucesso!";
        $pessoa->imprime();

                
    ?>
</body>
</html>