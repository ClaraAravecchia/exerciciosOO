<?php
    class Calculadora{
        private $attr1;
        private $attr2;

        function __construct($x, $y){
            $this->attr1 = $x;
            $this->attr2 = $y;
        }

        public function soma(){
            $soma = $this->attr1 + $this->attr2;
            return $soma; 
        }

        public function subtracao(){
            $sub = $this->attr1 - $this->attr2;
            return $sub; 
        }

        public function multiplicacao(){
            $multi = $this->attr1 * $this->attr2;
            return $multi; 
        }
        
        
        public function divisao(){
            if ($this->attr1 == 0){
                return "Divisão por Zero";
            }
            else{
                $div = $this->attr1 / $this->attr2;
                return $div; 
            }
            
        }
    }
?>