<?php
session_start();
include_once("visao/topo.php");
	if(isset($_GET["fun"])){

		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			
			include_once("controle/CadastrarAnimal_class.php");
			$pag = new CadastrarAnimal();
			
		} elseif($fun == "alterar"){
			
			include_once("controle/AlterarAnimal_class.php");
			$pag = new AlterarAnimal();
			
		} elseif($fun == "excluir"){
			
			include_once("controle/ExcluirAnimal_class.php");//op == sim
			$pag = new ExcluirAnimal();
			
		} elseif($fun == "listar"){
			
			include_once("controle/ListarAnimal_class.php");
			$pag = new ListarAnimal();
			
		}  elseif($fun == "exibir") {
			
			include_once("controle/ExibirAnimal_class.php");
			$pag = new ExibirAnimal();

		// ------------------------------ MÉTODOS PARA A SEGUNDA TABELA ------------------------------

		}  elseif($fun == "cadastrarVisto"){
        	
			include_once("controle/CadastrarAnimalVisto_class.php");
        	$pag = new CadastrarAnimalVisto();

		} elseif($fun == "alterarVisto"){
        
			include_once("controle/AlterarAnimalVisto_class.php");
        	$pag = new AlterarAnimalVisto();

    	} elseif($fun == "excluirVisto"){
        
			include_once("controle/ExcluirAnimalVisto_class.php");
        	$pag = new ExcluirAnimalVisto();
		
		} elseif($fun == "listarVisto"){
        
			include_once("controle/ListarAnimalVisto_class.php");
        	$pag = new ListarAnimalVisto();
        
    	} elseif($fun == "exibirVisto") {
        
			include_once("controle/ExibirAnimalVisto_class.php");
        	$pag = new ExibirAnimalVisto();
    
		} else {
			echo "<H2>Função não reconhecida!</H2>";			
		}
			
	} else {
		header("Location: index.php");
		exit();
	}
	
include_once("visao/base.php");

?>