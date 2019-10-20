<?php
	require_once("InterfaceExibicao.php");
	
	class Form implements Exibicao{
		private $method;
		private $action;
		private $name;
		private $lista_entradas = array();
		
		
		public function __construct($vetor){
			if(isset($vetor["action"])){
				$this->action=$vetor["action"];
			}
			if(isset($vetor["method"])){
				$this->method=$vetor["method"];
			}
			if(isset($vetor["name"])){
				$this->name=$vetor["name"];
			}
			if(isset($vetor["value"])){
				$this->value=$vetor["value"];
			}
		}
		
		public function add_input($vetor){
			$this->lista_entradas[] = new Input($vetor);
		}
		
		public function add_button($vetor){
			$this->lista_entradas[] = new Button($vetor);
		}		

		public function add_textArea($vetor){
			$this->lista_entradas[] = new TextArea($vetor);
		}
		
		public function add_select($vetor,$matriz){
			$this->lista_entradas[] = new Select($vetor,$matriz);
		}
		
		public function exibe(){
			echo "<form ";
			if($this->method!=null){
				echo "method='$this->method' ";
			}
			if($this->action!=null){
				echo "action='$this->action' ";
			}
			if($this->name!=null){
				echo "name='$this->name' ";
			}
			if($this->value!=null){
				echo "name='$this->value' ";
			}
			echo ">";
			
			foreach($this->lista_entradas as $i=>$e){
				echo "<div class='entrada'>";
				$e->exibe();
				echo "</div>";
			}
			
			echo "</form>";
		}
	}


?>