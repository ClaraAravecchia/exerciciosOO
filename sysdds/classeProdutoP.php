<?php
    class ProdutoP{
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
            $this->validade = $vetor['validade'];
        }


        function imprime(){
            echo "<fieldset>Nome: ".$this->nome."<br/>Descrição: ".$this->descricao.
            "<br/>Unidade: ".$this->unidade."<br/>Preço: ".
            $this->preco."<br/>Data de valdiade:".$this->validade."</fieldset>";
        }

        function exibe_tr(){
            echo "<tr>
                    <td>".$this->nome."</td>
                    <td>".$this->descricao."</td>
                    <td>".$this->unidade."</td>
                    <td>".$this->preco."</td>
                    <td>".$this->validade."</td>
            </tr>";
        }
    }
?>