<?php
	include_once("modelo/AnimalVistoDAO_class.php");
	
	class ListarAnimalVisto{
	
		public function __construct(){
			$dao = new AnimalVistoDAO();
			$lista = $dao->listar();
			//array de objetos do tipo contato
			
			include_once("visao/listaAnimalVisto.php");		
		}
	}
?>


