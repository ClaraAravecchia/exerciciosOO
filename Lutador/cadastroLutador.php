<?php
    if(!empty($_POST)){
        include ("classeLutador.php");
        session_start();

        $lutador = new Lutador($_POST);
        $_SESSION["lutador"][] = $lutador;
        echo "Lutador cadastrado com sucesso";

    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
</head>
<body>
    <?php
        include("cabecalho.php");
        // validacoes devem aconteder dentro do objeto luta
    ?>
    <hr>
    
    <form method="POST">
        <input type="text" name="nome" placeholder="Lutador" /><br/>
        <input type="text" name="pais" placeholder="País" /><br/>
        <input type="text" name="cidade" placeholder="Cidade" /><br/>
        <input type="text" name="estado" placeholder="Estado" /><br/>
        <input type="text" name="apelido" placeholder="Apelido" /><br/>
        <select name="categoria">
            <option value="pena">Peso Pena</option>
            <option value="medio">Peso Médio</option>
            <option value="pesado">Peso Pesado</option>
        </select><br/>

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>