<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <?php
        include ("classeProdutoNP.php");
        include ("cabecalho.php");       

        $produto = new ProdutoNP($_POST);

        session_start();
        $_SESSION["produtoNP"][] = $produto;
        echo "Produto cadastrado com sucesso!";
        $produto->imprime();

                
    ?>
</body>
</html>