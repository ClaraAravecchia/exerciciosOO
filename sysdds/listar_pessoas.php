
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
        echo " <h2>Lista de Clientes</h2>";        
        session_start();           
    ?>

    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>

        <tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["cliente"] as $i=>$p){
            $p->exibe_tr_pessoa();
        }
        ?>
        </tbody>
        </table>
</body>
</html>