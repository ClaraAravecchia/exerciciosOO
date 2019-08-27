<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <form method="POST" action="exercicioCalculadora.php">
    <?php
        if(empty($_POST)){
            echo "<label>Operador 1:</label><input type=\"number\" name=\"op1\" /><br/>";
            echo "<label>Operador 2:</label><input type=\"number\" name=\"op2\" /><br/>";
            echo "<input type=\"submit\" value=\"Enviar\" />";
        }
        else{
            $op1 = $_POST["op1"];
            $op2 = $_POST["op2"];

            include ("classeCalculadora.php");

            $calc = new Calculadora($op1, $op2);
            //$calc->attr1 = $op1;
            //$calc->attr2 = $op2;

            echo "<br/>Soma: ".$calc->soma();
            echo "<br/>Subtração: ".$calc->subtracao();
            echo "<br/>Multiplição: ".$calc->multiplicacao();
            echo "<br/>Divisão: ".$calc->divisao();
        }
    ?>
    
    </form>
</body>
</html>