<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Tuiuiu extends Animal implements Respira{
        public $animal = "Tuiuiu";

        public function respirar(){
            
        }
        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }


    }
?>