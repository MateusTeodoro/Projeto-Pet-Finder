<?php
	include_once("modelo/AnimalDAO_class.php");
	
	class AlterarAnimal{
		public function __construct(){		
			if(isset($_POST["enviar"])){ //Só vai entrar se um form foi enviado
				//$_POST foi o method do form
				//
				
				$c = new Animal();
				$c->setId($_POST["id"]);
				$c->setNome($_POST["nome"]);
				$c->setIdade($_POST["idade"]);
				$c->setRaca($_POST["raca"]);
				$c->setCor($_POST["cor"]);
				$c->setPorte($_POST["porte"]);
				$c->setDescricao($_POST["descricao"]);
				$c->setFoto("foto");
				
				$dao = new AnimalDAO();
				$dao->alterar($c);
				
				$status = "Alteração do animal " . $c->getNome() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaAnimal.php");
				
			} else{
			
				//quando chega tem o id preenchida com o valor do registro a ser alterado
				//está no vetor $_GET (link)
				$dao = new AnimalDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraAnimal.php");	
			
			}
		}
	}

?>
