
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
        echo " <h2>Lista de Produtos Não Perecíveis</h2>";       
        session_start();           
    ?>

    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Unidade</th>
            <th>Preço</th>

        <tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["produtoNP"] as $i=>$p){
            $p->exibe_tr();
        }
        ?>
        </tbody>
        </table>
</body>
</html>