<?php
    class Lutador{
        protected $nome;
        public $pais;
        public $cidade;
        public $estado;
        public $apelido;
        public $categoria;


        function __construct($dados){
            $this->nome = $dados["nome"];//
            $this->pais = $dados["pais"];
            $this->cidade = $dados["cidade"];//
            $this->estado = $dados["estado"];//
            $this->apelido = $dados["apelido"];
            $this->categoria = $dados["categoria"];//
            
        }

        public function get_nome(){
            return $this->nome;
        }
    }
?>