<HTML>
	<HEAD>
		<TITLE> Alterar Animal </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H1> Alterar Animal </H1>
		
		<FORM action="animal.php?fun=alterar" method="POST">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $cont->getId() . "'"; ?> />
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $cont->getNome() . "'"; ?> /> <br />

			<LABEL for="idade"> Idade: </LABEL> 
			<INPUT type="text" id="idade" name="idade" 
			<?php echo "value='" . $cont->getIdade() . "'"; ?> /> <br />
			
			<LABEL for="raca"> Raça: </LABEL> 
			<INPUT type="text" id="raca" name="raca" 
			<?php echo "value='" . $cont->getRaca() . "'"; ?>/> <br />
			
			<LABEL for="cor"> Cor: </LABEL> 
			<INPUT type="text" id="cor" name="cor" 
			<?php echo "value='" . $cont->getCor() . "'"; ?>/> <br />

			<LABEL for="porte"> Porte: </LABEL> 
			<INPUT type="text" id="porte" name="porte" 
			<?php echo "value='" . $cont->getPorte() . "'"; ?>/> <br />

			<LABEL for="descricao"> Descriçao: </LABEL> 
			<INPUT type="text" id="descricao" name="descricao" 
			<?php echo "value='" . $cont->getDescricao() . "'"; ?>/> <br />
			
			<div style="margin-top: 20px;">
			    <INPUT type="submit" name="enviar" value="Cadastrar" />
                <a href="index.php" class="botao-voltar">Voltar</a>
            </div>
			
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>