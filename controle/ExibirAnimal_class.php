<?php

	include_once("modelo/AnimalDAO_class.php");
	
	class ExibirAnimal{
	
		public function __construct(){
			
			$dao = new AnimalDAO();
			$cont = $dao->exibir($_GET["id"]);
			include_once("visao/exibeAnimal.php");	
			
		}
	}

?>
