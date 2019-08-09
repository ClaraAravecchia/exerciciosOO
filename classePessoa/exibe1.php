<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        include ("classePessoa.php");
        include ("cabecalho.php");       

        $pessoa = new Pessoa();

        $pessoa->nome     = $_POST["nome"];
        $pessoa->email    = $_POST["email"];
        $pessoa->cpf      = $_POST["cpf"];
        $pessoa->sexo     = $_POST["sexo"];
        $pessoa->dataNasc = $_POST["data"];

        session_start();
        $_SESSION["pessoa"][] = $pessoa;
        echo "Pessoa cadastrada com sucesso!";
        $pessoa->imprime();

                
    ?>
</body>
</html>