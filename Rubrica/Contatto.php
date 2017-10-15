<?php

class Contatto{
		private $nome;
		private $cognome;
		private $telefono;
		private $nascita;

		function __construct($nome,$cognome,$telefono,$nascita){
				$this->nome=$nome;
				$this->cognome=$cognome;
				$this->telefono=$telefono;
				$this->nascita=$nascita;
		}

		public function getNome(){
				return $this->nome;
		}
		public function getCognome(){
				return $this->cognome;
		}
		public function getTelefono(){
				return $this->telefono;
		}
		public function getNascita(){
				return $this->nascita;
		}
}	
?>
	
