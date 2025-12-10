<?php
	include_once("modelo/AnimalVistoDAO_class.php");
	
	class AlterarAnimalVisto{
		public function __construct(){		
			
			if(isset($_POST["enviar"])){ 
				
				$foto = "";

				// 1. Verifica se uma NOVA foto foi enviada
				if(!empty($_FILES["foto"]["name"])){
					$arquivo_temp = $_FILES["foto"]["tmp_name"];
					$nome = $_FILES["foto"]["name"];
					$extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

					if(strstr(".jpg;.jpeg;.gif;.png", $extensao)){
						$novoNome = uniqid(time()) . "." . $extensao;
						$foto = "visao/fotos/" . $novoNome;
						move_uploaded_file($arquivo_temp, $foto);
					}
				} else {
					// Se NÃO enviou foto nova, pega a antiga que veio no campo hidden
					$foto = $_POST["fotoAntiga"];
				}
				
				// Cria o objeto e preenche
				$c = new AnimalVisto();
				$c->setId($_POST["id"]);
				$c->setNome($_POST["nome"]);
				$c->setIdade($_POST["idade"]);
				$c->setRaca($_POST["raca"]);
				$c->setCor($_POST["cor"]);
				$c->setPorte($_POST["porte"]);
				$c->setDescricao($_POST["descricao"]);
				$c->setFoto($foto); // Salva a foto (nova ou antiga)
				
				$dao = new AnimalVistoDAO();
				$dao->alterar($c);
				
				$status = "Alteração efetuada com sucesso";
				
				// Volta para a lista
				$lista = $dao->listar();
				include_once("visao/listaAnimalVisto.php");
				
			} else {
				// Se não enviou formulário, carrega os dados atuais e mostra o form
				$dao = new AnimalVistoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraAnimalVisto.php");	
			}
		}
	}
?>