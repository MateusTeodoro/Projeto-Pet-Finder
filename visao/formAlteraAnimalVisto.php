<HTML>
	<HEAD>
		<TITLE> Alterar Animal Visto </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H1> Editar Dados do Animal Visto </H1>
		
        <FORM action="animal.php?fun=alterarVisto" method="POST" enctype="multipart/form-data">
			
			<INPUT type="hidden" name="id" value="<?php echo $cont->getId(); ?>" />
            
            <INPUT type="hidden" name="fotoAntiga" value="<?php echo $cont->getFoto(); ?>" />
			
			<LABEL for="nome"> Nome/Apelido: </LABEL> 
			<INPUT type="text" id="nome" name="nome" value="<?php echo $cont->getNome(); ?>" /> <br />

			<LABEL for="idade"> Idade: </LABEL> 
			<INPUT type="text" id="idade" name="idade" value="<?php echo $cont->getIdade(); ?>" /> <br />
			
			<LABEL for="raca"> Raça: </LABEL> 
			<INPUT type="text" id="raca" name="raca" value="<?php echo $cont->getRaca(); ?>" /> <br />
			
			<LABEL for="cor"> Cor: </LABEL> 
			<INPUT type="text" id="cor" name="cor" value="<?php echo $cont->getCor(); ?>" /> <br />

			<LABEL for="porte"> Porte: </LABEL> 
			<INPUT type="text" id="porte" name="porte" value="<?php echo $cont->getPorte(); ?>" /> <br />

			<LABEL for="descricao"> Onde foi visto: </LABEL> 
			<INPUT type="text" id="descricao" name="descricao" value="<?php echo $cont->getDescricao(); ?>" /> <br />
			
            <LABEL for="foto"> Trocar Foto (Opcional): </LABEL>
            <div style="margin-bottom: 10px;">
                <small>Foto Atual:</small><br>
                <img src="<?php echo $cont->getFoto(); ?>" width="100px" style="border-radius: 5px;">
            </div>
			<INPUT type="file" id="foto" name="foto" /> <br />

            <div style="margin-top: 20px;">
			    <INPUT type="submit" name="enviar" value="Salvar Alterações" />
                <a href="animal.php?fun=listarVisto" class="botao-voltar">Voltar</a>
            </div>
			
		</FORM>
		
	</BODY>
</HTML>