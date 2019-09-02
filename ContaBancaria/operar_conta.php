<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Operar Conta</title>
</head>
<body>
    <form action="operar_conta.php" method="POST">
        <?php
            include ("cabecalho.php"); 
            if (empty($_POST)){
                include ("form_operar.php");
            }
            else{
                include ("classeContaCorrente.php");
                session_start();
                
                foreach($_SESSION["conta_bancaria"] as $i=>$c){
                    if ($_POST["num_conta"] == $c->nroConta){   /// procura o objeto que tem aquele num de conta
                        if ($_POST["operacao"] == "saque"){
                            echo $c->sacar($_POST["valor"]);
                            
                        }
                        else{
                            echo $c->depositar($_POST["valor"]);
                        }

                    }
                    
                }

            }
        ?>
    </form>
</body>
</html>