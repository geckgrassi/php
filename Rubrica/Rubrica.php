<?php

include ("Contatto.php");

class Rubrica{
		private $contatti = array();
		private $nomeFile;

		function __construct ($nf){
			$this->nomeFile = $nf;
			$this->apri();
		}

		public function aggiungi($Contatto){
			$this->contatti[]=$Contatto;
			$this->salva();
		}

		private function salva(){
			//home/ITIS-EMATTEI.LOCAL/s_grsgcm98p22l500b/dati/Rubrica/info.txt
			$file = fopen($this->nomeFile, "w");
			foreach($this->contatti as $contatto){
				$riga = sprintf("%s %s %s %s \n",$contatto->getNome(),	$contatto->getCognome(), $contatto->getTelefono(),$contatto->getNascita());
				fwrite($file,$riga);
			}
			fclose($file);
		}
		
		public function apri(){
				
			if(!$file = fopen ($this->nomeFile,"r")){
					return;
			}
			while ($info=fscanf($file,"%s %s %s %s \n")){
				print_r($info);
				$contatto = new Contatto($info[0],$info[1],$info[2],$info[3]);
				$this->aggiungi($contatto);
			}
			fclose($file);
		}
				
}
?>
