<?php
    include "classePessoa.php";
    class Gerente extends Pessoa {
        public $area;
        public $salario;

        function __construct($vetor){
            parent::__construct($vetor);
            $this->area = $vetor['area'];
            $this->salario = $vetor['salario'];
            
        }

        function imprime(){
            $this->imprime_pessoa();
            $texto = "<fieldset>Area: ".$this->area."<br/>Salario: ".$this->salario.
            "<br/></fieldset>";
            echo $texto; 
        }

        function exibe_tr(){
            $this->exibe_tr_pessoa();
            echo "
                    <td>".$this->area."</td>
                    <td>".$this->salario."</td>
            </tr>";
        }
    }
?>