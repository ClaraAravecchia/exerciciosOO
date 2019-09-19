<?php
    if(!empty($_POST)){
        include ("classeLuta.php");
        //session_start();

        $luta = new Luta($_POST["num"], $_POST["categoria"], $_POST["data"]);
        $_SESSION["luta"][] = $luta;
        echo "Luta cadastrada com sucesso";

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
        <label>Luta Nro:</label>
        <?php
        session_start();
        $num = sizeof($_SESSION["luta"]); 
            echo "<input type='text' name='num' placeholder='Número' value=\"$num\" /><br/><br/>";
        
        ?>
        <input type="date" name="data" placeholder="data" /><br/>
        <select name="categoria">
            <option value="pena">Peso Pena</option>
            <option value="medio">Peso Médio</option>
            <option value="pesado">Peso Pesado</option>
        </select><br/>
        
        
        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>