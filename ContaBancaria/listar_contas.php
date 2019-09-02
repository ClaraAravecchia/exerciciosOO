
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        //include ("classeContaCorrente.php");    
        include ("classeContaEspecial.php");
        include ("cabecalho.php"); 
        session_start();           
    ?>

    <table border="1">
        <thead>
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Nro da Conta</th>
            <th>Saldo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($_SESSION["conta_bancaria"] as $i=>$p){
            $p->exibe_saldo();
        }
        ?>
        </tbody>
        </table>
</body>
</html>