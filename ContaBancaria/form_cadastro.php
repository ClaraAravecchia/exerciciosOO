<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <script>
        function liberar_limite(valor){
            if(valor == "conta_especial"){
                document.getElementById("limite").style.display = "block";
            }
            else{
                document.getElementById("limite").style.display = "none";
            }
        }
    </script>
</head>
<body>
    <fieldset>
        <form action="form_cadastro.php" method="POST">
        <?php
            include("cabecalho.php");
            if (empty($_POST)){
                include ("form.php");
            }
            else{               
                if ($_POST["conta"] == "conta_especial"){
                    include ("classeContaEspecial.php");
                    $bank = new ContaEspecial($_POST);
                }
                else{
                    include ("classeContaCorrente.php");
                    $bank = new ContaCorrente($_POST);
                }
                
                session_start();
                $_SESSION["conta_bancaria"][] = $bank;
                echo "Cadastrado com sucesso!";
                $bank->exibe_dados();

                }
        ?>
        </form>
    </fieldset>
</body>
</html>