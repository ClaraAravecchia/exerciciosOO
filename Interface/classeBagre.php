<?php
    include("interfaceRespirar.php");
    include("classeanimal.php");

    class Bagre extends Animal implements Respira{
        public $animal = "Bagre";

        public function respirar(){
            
        }
        public function animal_cumprimenta(){
            echo $this->animal." ";
            echo $this->hello();
        }
    }
?>