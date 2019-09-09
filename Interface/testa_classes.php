<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <form action="testa_classes.php" method="POST">
    <fieldset>
        <?php
            if(empty($_POST)){
                echo "<select name=\"animal\">";
                echo "<option value=\"Leao\">Leão</option>";
                echo "<option value=\"Rinoceronte\">Rinoceronte</option>";
                echo "<option value=\"Elefante\">Elefante</option>";
                echo "<option value=\"Cascavel\">Cascavel</option>";
                echo "<option value=\"Bagre\">Bagre</option>";
                echo "<option value=\"Tuiuiu\">Tuiuiu</option>";
                echo "<select/>";

                echo "<input type=\"submit\" value=\"Enviar\" />";
            }
            else{
                $animal = $_POST["animal"];
                
                switch($animal){
                    case "Leao": 
                        include("classeLeao.php");
                        break;
                    case "Rinoceronte":
                        include("classeRinoceronte.php");
                        break;
                    case "Elefante":
                        include("classeElefante.php");
                        break;
                    case "Cascavel":
                        include("classeCascavel.php");
                        break;
                    case "Bagre":
                        include("classeBagre.php");
                        break;
                    case "Tuiuiu":
                        include("classeTuiuiu.php");
                        break;
                }

                $a = new $animal;
                $a->animal_cumprimenta();
            }
        ?>
    </fieldset>
    </form>
</body>
</html>