<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Elefante extends Animal implements Respira{
        public $animal = "Elefante";

        public function respirar(){

        }
        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }
    }
?>