<?php
    include("classeContaCorrente.php");
    class ContaEspecial extends ContaCorrente{
        public $limite;

        function __construct($vetor){
            parent::__construct($vetor);
            $this->limite = $vetor["limite"];
        }

        public function sacar($valor){
            if ($this->saldo > $this->limite){
                $this->saldo -= $valor;
                return "Conta:".$this->nroConta."<br/>Saldo:".$this->saldo;
            }
            else{
                return "Saldo limite insuficiente";
            }
        }
    }
?>