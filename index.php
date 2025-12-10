<?php
session_start();
include_once("visao/topo.php");
?>

<div class="Meio">
    <div class="Cachorro_img">
        <img src="visao/img/Cachorro.png" alt="Cachorro sentado">
    </div>

    <div class="Botões">
        <a href="animal.php?fun=cadastrar">Inserir animal desaparecido</a>
        <a href="animal.php?fun=cadastrarVisto">Enviar detalhes de animal encontrado</a>
        <a href="animal.php?fun=listar">Lista de animais desaparecidos</a>
        <a href="animal.php?fun=listarVisto">Lista de animais vistos</a>
    </div>
</div>

<?php
include_once("visao/base.php");
?>