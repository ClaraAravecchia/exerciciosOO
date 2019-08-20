<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        include ("classeProduto.php");
        include ("cabecalho.php");       

        $produto = new Produto($_POST);

        session_start();
        $_SESSION["produtoNP"][] = $produto;
        echo "Produto cadastrado com sucesso!";
        $produto->exibicao_unitaria();

                
    ?>
</body>
</html>