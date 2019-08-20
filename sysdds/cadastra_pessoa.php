<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <?php
        include ("classePessoa.php");
        include ("cabecalho.php");       

        $pessoa = new Pessoa($_POST);

        session_start();
        $_SESSION["cliente"][] = $pessoa;
        echo "Cliente cadastrado com sucesso!";
        $pessoa->imprime();

                
    ?>
</body>
</html>