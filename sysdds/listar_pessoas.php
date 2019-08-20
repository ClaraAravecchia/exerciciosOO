
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
        session_start();           
    ?>

    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>

        <tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["pessoa"] as $i=>$p){
            $p->exibe_tr();
        }
        ?>
        </tbody>
        </table>
</body>
</html>