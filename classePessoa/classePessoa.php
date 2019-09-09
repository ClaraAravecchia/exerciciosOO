<?php
    class Pessoa {
        public $nome;
        public $email;
        public $cpf;
        public $sexo;
        public $data_nascimento;

        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->email = $vetor['email'];
            $this->cpf = $vetor['cpf'];
            $this->sexo = $vetor['sexo'];
            $this->data_nascimento = $vetor['data_nascimento'];
        }


        function imprime(){
            $texto = "<fieldset>Nome: ".$this->nome."<br/>Email: ".$this->email.
            "<br/>CPF: ".$this->cpf."<br/>Sexo: ".$this->sexo."<br/>Data Nasc: ".
            $this->data_nascimento."</fieldset>";
            echo $texto; 
        }

        function exibe_tr(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->email."</td>
                    <td>".$this->cpf."</td>
                    <td>".$this->sexo."</td>
                    <td>".$this->data_nascimento."</td>
            </tr>";
        }
    }
?>