<?php

include './FluxoDeDados.php';

$slq = filter_input(INPUT_GET, 'sql');
$titulo = filter_input(INPUT_POST, 'titulo');
$txtDescricao = filter_input(INPUT_POST, 'txtDescricao');

$fluxoDados = new FluxoDeDados();

if ($slq == "inserir") {

    $img = $_FILES['imagem']['name'];
    $query = "INSERT INTO `cardapio`(`id`, `titulo`, `descricao`, `img`) "
            . "VALUES (null,'$titulo','$txtDescricao', '$img')";

    $fluxoDados->InserirDados($query, $conexaoBanco, "cardapio");
    
    $fluxoDados->UpaImagens("../../Imgs/Cardapio/");
    
} else if ($slq == "alterar") {

    $id = filter_input(INPUT_GET, 'id');

    $img = $_FILES['imagem']['name'];

    $imgDel = filter_input(INPUT_GET, 'imgDel');

    $query = "UPDATE `cardapio` SET "
            . "`titulo`='$titulo',`descricao`='$txtDescricao',"
            . "`img`='$img' WHERE `id`='$id'";

    $fluxoDados->AlteraDadosComImg($query, $conexaoBanco, $imgDel, "cardapio", "../../Imgs/Cardapio/");
    
} else {

    $id = filter_input(INPUT_GET, 'id');
    $imgDel = filter_input(INPUT_GET, 'imgDel');
    $query = "DELETE FROM `cardapio` WHERE `cardapio`.`id` = '$id'";
    $fluxoDados->DeletaDadosComImg($query, $conexaoBanco, $imgDel, "cardapio", "../../Imgs/Cardapio/");
}