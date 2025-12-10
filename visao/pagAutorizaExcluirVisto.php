<HTML>
	<HEAD>
		<TITLE> Confirmar Exclusão </TITLE>
	</HEAD>
	<BODY>
		
		<div style="background-color: rgba(200, 0, 0, 0.3); padding: 40px; border-radius: 10px; display: inline-block;">
            <H1> Tem certeza que deseja excluir o registro de "<?php echo $cont->getNome(); ?>"? </h1>
            <p>Essa ação não pode ser desfeita.</p>
            <br>
            
            <A href="animal.php?fun=excluirVisto&conf=sim&id=<?php echo $cont->getId();?>" 
               class="botao-voltar" style="background-color: red; border: none;"> 
               Sim, Excluir 
            </A> 
            
            &nbsp;&nbsp;&nbsp; <A href="animal.php?fun=listarVisto" class="botao-voltar">
               Não, Cancelar
            </A>
        </div>
		
	</BODY>
</HTML>