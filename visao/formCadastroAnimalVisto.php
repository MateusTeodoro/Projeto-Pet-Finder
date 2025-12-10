		<H1> Cadastro de Animal Perdido </H1>
		
		<FORM action="animal.php?fun=cadastrarVisto" method="POST" 
		enctype="multipart/form-data">
			
			<LABEL for="nome"> Nome (se souber): </LABEL> 
			<INPUT type="text" id="nome" name="nome" /> <br />

			<LABEL for="idade"> Idade (se souber): </LABEL> 
			<INPUT type="text" id="idade" name="idade" /> <br />
			
			<LABEL for="raca"> Raça: </LABEL> 
			<INPUT type="text" id="raca" name="raca" /> <br />
			
			<LABEL for="cor"> Cor: </LABEL> 
			<INPUT type="text" id="cor" name="cor" /> <br />

			<LABEL for="porte"> Porte: </LABEL> 
			<INPUT type="text" id="porte" name="porte" /> <br />

			<LABEL for="descricao"> Descricao: </LABEL> 
			<INPUT type="text" id="descricao" name="descricao" /> <br />

			<LABEL for="foto"> Foto: </LABEL>
			<INPUT type="file" id="foto" name="foto" /> <br />
			
			<div style="margin-top: 20px;">
			    <INPUT type="submit" name="enviar" value="Cadastrar" />
                <a href="index.php" class="botao-voltar">Voltar</a>
            </div>
					
		</FORM>