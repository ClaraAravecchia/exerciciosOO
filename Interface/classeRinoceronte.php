<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Rinoceronte extends Animal implements Respira{
        public $animal = "Rinoceronte";

        public function respirar(){
            
        }

        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }
    }
?>