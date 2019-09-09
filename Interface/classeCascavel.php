<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Cascavel extends Animal implements Respira{
        public $animal = "Cascavel";

        public function respirar(){
            
        }
        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }
    }
?>