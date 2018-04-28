<?php

include './FluxoDeDados.php';

$slq = filter_input(INPUT_GET, 'sql');

$fluxoDados = new FluxoDeDados();

if ($slq == "inserir") {

    $titulo = filter_input(INPUT_POST, 'titulo');
    $img = $_FILES['imagem']['name'];

    $query = "INSERT INTO `homecarrossel`(`id`, `titulo`, `img`) "
            . "VALUES (null,'$titulo', '$img')";

    $fluxoDados->InserirDados($query, $conexaoBanco, true, "home");
    $fluxoDados->UpaImagens("../../Imgs/Slider/");
} else if ($slq == "alterar") {

    $id = filter_input(INPUT_GET, 'id');
    $titulo = filter_input(INPUT_POST, 'titulo');
    $img = $_FILES['imagem']['name'];
    $imgDel = filter_input(INPUT_GET, 'imgDel');
    
    $query = "UPDATE `homecarrossel` SET "
            . "`titulo`='$titulo',`img`='$img' WHERE `id`='$id'";


    $fluxoDados->AlteraDadosComImg($query, $conexaoBanco, $imgDel, "home", "../../Imgs/Slider/");
} else {
    $id = filter_input(INPUT_GET, 'id');
    $imgDel = filter_input(INPUT_GET, 'imgDel');
    $query = "DELETE FROM `homecarrossel` WHERE `homecarrossel`.`id` = $id";
    $fluxoDados->DeletaDadosComImg($query, $conexaoBanco, $imgDel, "home", "../../Imgs/Slider/");
}

