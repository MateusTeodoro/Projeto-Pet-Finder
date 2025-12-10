<?php
	include_once("modelo/AnimalDAO_class.php");	
	class CadastrarAnimal{
		//CONTROLE
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado

				//upload do arquivo
				$arquivo_temp = $_FILES["foto"]["tmp_name"];
				$nome = $_FILES["foto"]["name"];

				$extensao = pathinfo($nome, PATHINFO_EXTENSION);
				$extensao = strtolower($extensao);

				if(strstr(".jpg;.jpeg;.gif;.png", $extensao))
				{
					//dar um nome único para o arquivo usando o tempo de upload
					//pegar o timestamp (tempo em milisegundo) - time()
					$novoNome = uniqid(time()) . "." . $extensao;
					$foto = "visao/fotos/" . $novoNome; //caminho

					if(@move_uploaded_file($arquivo_temp, $foto)) //ação de upload
					{
						$status = "Upload feito com sucesso <br />";
					}
				}
				
				else
				{
					$foto = "..."; //arquivo com foto inexistente
				}
				
				$c = new Animal();
				$c->setNome($_POST["nome"]);
				$c->setIdade($_POST["idade"]);
				$c->setRaca($_POST["raca"]);
				$c->setCor($_POST["cor"]);
				$c->setPorte($_POST["porte"]);
				$c->setDescricao($_POST["descricao"]);
				$c->setFoto($foto);
				
				$dao = new AnimalDAO();
				$dao->cadastrar($c);
				
				$status = "Cadastro do animal " . $c->getNome() . 
				" efetuado com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaAnimal.php");
				
			} else{
			
				include_once("visao/formCadastroAnimal.php");	
			
			}
		}
	}
?>
