<?php
    if(!empty($_POST)){

        foreach($_SESSION["luta"] as $i=>$l){ // erro aqui-------------
            if($l->get_numero() == $_POST["num_luta"]){
                $luta = $i;
                $luta->set_lutador($_POST["l1"], 1);
                $luta->set_lutador($_POST["l2"], 2);
            }    
        }
        
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
    <?php
            require("classeLuta.php");
            require("classeLutador.php");
            session_start();
            echo "Luta: <select name='num_luta'>";
            foreach($_SESSION["luta"] as $i=>$l){
                echo"<option value='$i'>".$l->get_numero()."</option>";
            }
            echo "</select><br/>";
         
             echo "Lutador 1: <select name='l1'>";
             foreach($_SESSION["lutador"] as $i=>$l){
                 echo"<option value='$i'>".$l->get_nome()."</option><br/>";
             }
             echo"</select><br/>";

             echo "Lutador 2: <select name='l2'>";
             foreach($_SESSION["lutador"] as $i=>$l){
                 echo"<option value='$i'>".$l->get_nome()."</option>";
             }
             echo"</select><br/>";
        ?>

         Categoria: <select name="categoria">
            <option value="pena">Peso Pena</option>
            <option value="medio">Peso Médio</option>
            <option value="pesado">Peso Pesado</option>
        </select><br/>
        

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>