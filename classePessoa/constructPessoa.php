<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        include "classePessoa.php";

        $n = $_POST["nome"];
        $e = $_POST["email"];
        $c = $_POST["cpf"];
        $s = $_POST["sexo"];
        $d = $_POST["data_nascimento"];

        $p = new Pessoa($n, $e, $c, $s, $d);
        //$p->imprime();
    ?>
</body>
</html>