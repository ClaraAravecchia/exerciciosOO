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
            $texto = "<fieldset>Area: ".$this->area."<br/>Salario: ".$this->salario.
            "<br/>Turno:".$this->turno."<br/></fieldset>";
            echo $texto; 
        }

        function exibe_tr(){
            echo "<tr>
                    <td>".$this->area."</td>
                    <td>".$this->salario."</td>
            </tr>";
        }
    }
?>