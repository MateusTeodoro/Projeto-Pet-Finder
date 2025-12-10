<?php
	include_once("modelo/AnimalDAO_class.php");
	
	class ListarAnimal{
	
		public function __construct(){
			$dao = new AnimalDAO();
			$lista = $dao->listar();
			//array de objetos do tipo contato
			
			include_once("visao/listaAnimal.php");		
		}
	}
?>


