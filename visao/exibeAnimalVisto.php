<HTML>

	<HEAD>
		<TITLE> Detalhes: <?php echo $cont->getNome(); ?> </TITLE>
	</HEAD>

	<BODY>
		
		<H1> Detalhes do Animal Visto </H1>
        
        <div style="background-color: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; display: inline-block; text-align: left;">
            <UL>
                <LI><B>Nome/Apelido:</B> <?php echo $cont->getNome(); ?></LI>
                <LI><B>Idade:</B> <?php echo $cont->getIdade(); ?></LI>
                <LI><B>Raça:</B> <?php echo $cont->getRaca(); ?></LI>
                <LI><B>Cor:</B> <?php echo $cont->getCor(); ?></LI>
                <LI><B>Porte:</B> <?php echo $cont->getPorte(); ?></LI>
                <LI><B>Local/Descrição:</B> <?php echo $cont->getDescricao(); ?></LI>
                <br>
                <LI> <IMG src="<?php echo $cont->getFoto(); ?>" width="300" style="border-radius: 10px; box-shadow: 2px 2px 5px rgba(0,0,0,0.5);" /> </LI>
            </UL>
            
            <br>
            <A href="animal.php?fun=listarVisto" class="botao-voltar"> Voltar para a Lista </A>
        </div>
		
	</BODY>
	
</HTML>