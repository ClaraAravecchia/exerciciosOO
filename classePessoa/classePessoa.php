<?php
    class Pessoa {
        public $nome;
        public $email;
        public $cpf;
        public $sexo;
        public $data_nascimento;

        function __construct($n, $e, $c, $s, $d){
            $this->nome = $n;
            $this->email = $e;
            $this->cpf = $c;
            $this->sexo = $s;
            $this->data_nascimento = $d;
        }


        function imprime(){
            $texto = "<fieldset>Nome: ".$this->nome."<br/>Email: ".$this->email.
            "<br/>CPF: ".$this->cpf."<br/>Sexo: ".$this->sexo."<br/>Data Nasc: ".
            $this->dataNasc."</fieldset>";
            echo $texto; 
        }

        function exibe_tr(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->email."</td>
                    <td>".$this->cpf."</td>
                    <td>".$this->sexo."</td>
                    <td>".$this->dataNasc."</td>
            </tr>";
        }
    }
?>