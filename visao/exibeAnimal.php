<HTML>

	<HEAD>
		<TITLE> Animal <?php echo $cont->getNome(); ?> </TITLE>
	</HEAD>

	<BODY>
		
		<H1> Animal <?php echo $cont->getNome(); ?> </H1>
		<UL>
			<LI>Nome: <?php echo $cont->getNome(); ?></LI>
			<LI>Idade: <?php echo $cont->getIdade(); ?></LI>
			<LI>Raça: <?php echo $cont->getRaca(); ?></LI>
			<LI>Cor: <?php echo $cont->getCor(); ?></LI>
			<LI>Porte: <?php echo $cont->getPorte(); ?></LI>
			<LI>Descrição: <?php echo $cont->getDescricao(); ?></LI>
			<LI> <IMG src=<?php echo $cont->getFoto(); ?> width="100" /> </LI>
		</UL>
		
		<A href="animal.php?fun=listar"> Voltar </A>
		
	</BODY>
	
</HTML>