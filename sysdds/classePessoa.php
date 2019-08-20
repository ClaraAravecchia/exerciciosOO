<?php
    class Pessoa {
        public $nome;
        public $email;
        public $cpf;
        public $sexo;
        public $data_nascimento;
        public $endereco;
        public $cidade;
        public $estado;
        public $pais;

        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->email = $vetor['email'];
            $this->cpf = $vetor['cpf'];
            $this->sexo = $vetor['sexo'];
            $this->data_nascimento = $vetor['data_nascimento'];
            $this->endereco = $vetor['endereco'];
            $this->cidade = $vetor['cidade'];
            $this->estado = $vetor['estado'];
            $this->pais = $vetor['pais'];
        }


        function imprime(){
            $texto = "<fieldset>Nome: ".$this->nome."<br/>Email: ".$this->email.
            "<br/>CPF: ".$this->cpf."<br/>Sexo: ".$this->sexo."<br/>Data Nasc: ".
            $this->data_nascimento."<br/>Endereço:".$this->endereco."<br/>Cidade:".$this->cidade.
            "<br>Estado:".$this->estado."<br/>País:".$this->pais."</fieldset>";
            echo $texto; 
        }

        function exibe_tr_pessoa(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->email."</td>
                    <td>".$this->cpf."</td>
                    <td>".$this->sexo."</td>
                    <td>".$this->data_nascimento."</td>
                    <td>".$this->endereco."</td>
                    <td>".$this->cidade."</td>
                    <td>".$this->estado."</td>
                    <td>".$this->pais."</td>
            </tr>";
        }
    }
?>