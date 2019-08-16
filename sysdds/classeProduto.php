<?php
    class Produto {
        public $nome;
        public $descricao;
        public $tipo;
        public $unidade;
        public $preco;

        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->descricao = $vetor['descricao'];
            $this->tipo = $vetor['tipo'];
            $this->unidade = $vetor['unidade'];
            $this->preco = $vetor['preco'];
        }


        function exibicao_unitaria(){
            echo "<fieldset>Nome: ".$this->nome."<br/>Descrição: ".$this->descricao.
            "<br/>Tipo: ".$this->tipo."<br/>Unidade: ".$this->unidade."<br/>Preço: ".
            $this->preco."</fieldset>";
        }

        function exibicao_tabela(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->descricao."</td>
                    <td>".$this->tipo."</td>
                    <td>".$this->unidade."</td>
                    <td>".$this->preco."</td>
            </tr>";
        }
    }
?>