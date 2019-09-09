<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Leao extends Animal implements Respira{
        public $animal = "Leão";

        public function respirar(){

        }
        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }
    }
?>