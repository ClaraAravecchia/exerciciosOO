<?php
    class ProdutoNP{
        public $nome;
        public $descricao;
        public $unidade;
        public $preco;
        public $validade;

        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->descricao = $vetor['descricao'];
            $this->unidade = $vetor['unidade'];
            $this->preco = $vetor['preco'];
        }


        function imprime(){
            echo "<fieldset>Nome: ".$this->nome."<br/>Descrição: ".$this->descricao.
            "<br/>Unidade: ".$this->unidade."<br/>Preço: ".
            $this->preco."</fieldset>";
        }

        function exibe_tr(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->descricao."</td>
                    <td>".$this->unidade."</td>
                    <td>".$this->preco."</td>
            </tr>";
        }
    }
?>