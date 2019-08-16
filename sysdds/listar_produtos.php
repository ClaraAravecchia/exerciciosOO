
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
        session_start();           
    ?>

    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Unidade</th>
            <th>Preço</th>
        <tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["produto"] as $i=>$p){
            $p->exibicao_tabela();
        }
        ?>
        </tbody>
        </table>
</body>
</html>