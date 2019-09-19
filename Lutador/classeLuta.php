<?php
    class Luta{
        protected $numero;
        protected $lutador1;
        protected $lutador2;
        protected $resultado;
        protected $vencedor;
        public $categoria;
        public $data;
    

    function __construct($n, $categoria, $data){
        $this->categoria = $categoria;
        $this->numero = $n;
        $this->data = $data;
    }

    public function get_numero(){
        return $this->numero;
    }

    public function set_lutador(Lutador $l, $posicaoLutador){
        if($posicaoLutador == 1){
            $this->lutador1 = $l;
        }
        else{
            $this->lutador2 = $l;
        }
    }

    public function set_resultado($ponto, $lutador){
        if (isset($lutador)){
            $this->vencedor = $lutador;
            $this->ponto = 2; 
        }
        else{
            $this->vencedor = null; 
            $this->ponto = 1;
        }
        
    }
}
?>