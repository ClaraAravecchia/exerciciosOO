<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        include ("classeFuncionario.php");
        include ("cabecalho.php");       

        $pessoa = new Funcionario($_POST);

        session_start();
        $_SESSION["funcionario"][] = $pessoa;
        echo "Funcionario cadastrado com sucesso!";
        $pessoa->imprime();

                
    ?>
</body>
</html>