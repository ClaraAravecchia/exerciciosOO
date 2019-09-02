<?php
    class ContaCorrente{
        private $cpf;
        private $nome;
        private $email;
        private $nroConta;
        protected $saldo;

        public function get_nroConta(){
            return $this->nroConta;
        }

        function __construct($vetor){
            $this->cpf = $vetor["cpf"];
            $this->nome = $vetor["nome"];
            $this->email = $vetor["email"];
            $this->nroConta = @date("YmdHis"); 
            $this->saldo = 0;
         
        }

        public function depositar($valor){
            $this->saldo += $valor;
            return "Conta:".$this->nroConta."<br/>Saldo:".$this->saldo;
        }
        public function sacar($valor){   /////////////////////////////
            if ($this->saldo >= $valor){
                $this->saldo -= $valor;
                return "Conta:".$this->nroConta."<br/>Saldo:".$this->saldo;
            }
            else{
                return "Saldo insuficiente";
            }
        }
        public function exibe_dados(){
            echo "<fieldset>CPF: $this->cpf<br/>Nome: $this->nome<br/>Email: $this->email<br/>Número da conta: 
            $this->nroConta<br/>Saldo: $this->saldo</fieldset>";
        }
        public function exibe_saldo(){
            echo "<tr>
                    <td>".$this->cpf."</td>
                    <td>".$this->nome."</td>
                    <td>".$this->email."</td>
                    <td><a href=\"operar_conta.php?conta=$this->nroConta\" >".$this->nroConta."</a></td>
                    <td>".$this->saldo."</td>
            </tr>";
        }
    }
?>