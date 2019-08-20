
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <?php
        include ("classeFuncionario.php");
        include ("cabecalho.php");  
        echo " <h2>Lista de Funcionários</h2>";     
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
            <th>Área</th>
            <th>Salário</th>
            <th>Turno</th>

        <tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["funcionario"] as $i=>$p){
            $p->exibe_tr();
        }
        ?>
        </tbody>
        </table>
</body>
</html>