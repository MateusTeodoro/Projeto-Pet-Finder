<HTML>
	<HEAD>
		<TITLE> Listagem de Animais </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		<?php
			if(isset($status)){ echo "<H2>".$status."</H2>";}
			//Se $status está preenchida, imprimir ela
		?>
		<div style="margin-bottom: 20px;">
		    <A href="animal.php?fun=cadastrar" class="botao-voltar" style="background-color: #76c4df; color: #0a1942; border: none;"> Cadastrar Novo Animal</A>
            <A href="index.php" class="botao-voltar"> Voltar para Home </A>
        </div>
			
		<TABLE border="1px">
			<TR> 
				<TH> ID </TH>
				<TH> Nome </TH>
				<TH> Idade </TH>
				<TH> Raça </TH>
				<TH> Cor </TH>	
				<TH> Porte </TH>
				<TH> Descrição </TH>
				<TH> <img src="visao/img/update.png" width='30px' /> </TH>
				<TH> <img src="visao/img/delete.png" width='30px' /> </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			    <?php
				foreach($lista as $c){	
					echo "<TR>"; 	

					echo "<TD>" . $c->getId() . "</TD>";
					
					echo "<TD><A href='animal.php?fun=exibir&id=". $c->getId() . 
					      "'>" . $c->getNome() . "</A></TD>";
					
					echo "<TD>" . $c->getIdade() . "</TD>";
					
					echo "<TD>" . $c->getRaca() . "</TD>";
					
					echo "<TD>" . $c->getCor() . "</TD>";	
					
					echo "<TD>" . $c->getPorte() . "</TD>";

					echo "<TD>" . $c->getDescricao() . "</TD>";
					
					echo "<TD><A href=animal.php?fun=alterar&id=" . 
					      $c->getId() . "><img src='visao/img/update.png' width='30px'/> 
						  </A></TD>"; 

					echo "<TD><A href=animal.php?fun=excluir&id=" . 
					      $c->getId() . "><img src='visao/img/delete.png' width='30px' /> 
						  </A></TD>";	
					
					echo "</TR>";	
				}	
			?>	
		</TABLE>
	</BODY>
</HTML>
