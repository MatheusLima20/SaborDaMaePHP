<?php

include './FluxoDeDados.php';

$id = filter_input(INPUT_GET, 'id');
$alterar = filter_input(INPUT_GET, 'alterar');

$fluxoDados = new FluxoDeDados();

if ($alterar == "false") {

    $query = "DELETE FROM `opiniao` WHERE `opiniao`.`id` = '$id'";

    $fluxoDados->DeletaDados($query, $conexaoBanco, "contato");
} else {


    $txtOpiniao = filter_input(INPUT_POST, 'txtArea');

    $query = "UPDATE `opiniao` SET `opiniao` = '$txtOpiniao' WHERE `opiniao`.`id` = '$id'";

    $fluxoDados->AlteraDados($query, $conexaoBanco, "contato");
}
