<?php
	include_once("modelo/AnimalVistoDAO_class.php");
	
	class ExcluirAnimalVisto{
	
		public function __construct(){
			
			if(isset($_GET["conf"])){
			
				if($_GET["conf"] == "sim"){
					$dao = new AnimalVistoDAO();
					$cont = $dao->exibir($_GET["id"]);
					
					// Deleta o arquivo da foto da pasta
					if(file_exists($cont->getFoto())){
						unlink($cont->getFoto());
					}
					
					// Deleta do banco
					$dao->excluir($cont);
					
					$status = "O registro do animal visto foi excluído com sucesso";
					
					// Recarrega a lista atualizada
					$lista = $dao->listar();
					include_once("visao/listaAnimalVisto.php");
				}
			} else{
				$dao = new AnimalVistoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/pagAutorizaExcluirVisto.php");	
			}
		}
	}
?>