<?php
	include_once("modelo/AnimalVistoDAO_class.php");
	
	class ExibirAnimalVisto{
	
		public function __construct(){
			
			$dao = new AnimalVistoDAO();
			$cont = $dao->exibir($_GET["id"]);
			
			include_once("visao/exibeAnimalVisto.php");	
		}
	}
?>