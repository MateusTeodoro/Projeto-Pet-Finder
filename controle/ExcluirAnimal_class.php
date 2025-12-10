<?php

	include_once("modelo/AnimalDAO_class.php");
	
	class ExcluirAnimal{
	
		public function __construct(){
			
			if(isset($_GET["conf"])){
			
				if($_GET["conf"] == "sim"){
				
					$dao = new AnimalDAO();
					$cont = $dao->exibir($_GET["id"]);
					unlink($cont->getFoto());
					$dao->excluir($cont);
					$status = "O animal " . $cont->getNome() . " foi excluído com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaAnimal.php");
				}
			} else{
			
				$dao = new AnimalDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/pagAutorizaExcluir.php");	
			
			}
		}
	}

?>
