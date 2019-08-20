<?php
    include "classePessoa.php";
    class Funcionario extends Pessoa{
        public $area;
        public $salario;
        public $turno;

        function __construct($vetor){
            parent::__construct($vetor);
            $this->area = $vetor['area'];
            $this->salario = $vetor['salario'];
            $this->turno = $vetor["turno"];
            
        }


        function imprime(){
            $this->imprime_pessoa();
            $texto = "<fieldset>Area: ".$this->area."<br/>Salario: ".$this->salario.
            "<br/>Turno:".$this->turno."<br/></fieldset>";
            echo $texto; 
        }

        function exibe_tr(){
            $this->exibe_tr_pessoa();
            echo "
                    <td>".$this->area."</td>
                    <td>".$this->salario."</td>
                    <td>".$this->turno."</td>
            </tr>";
        }
    }
?>