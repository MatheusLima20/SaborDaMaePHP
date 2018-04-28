<?php

include 'ConexaoBanco.php';

$txtNome = filter_input(INPUT_POST, 'name');
$txtEmail = filter_input(INPUT_POST, 'email');
$txtOpiniao = filter_input(INPUT_POST, 'opiniao');

$query = mysqli_query($conexaoBanco, "select * from txthome");

    $insertQuery = "INSERT INTO `opiniao` (`id`, `nome`, `email`, `opiniao`) "
            . "VALUES (NULL, '$txtNome', '$txtEmail', '$txtOpiniao')";
    

    mysqli_query($conexaoBanco, $insertQuery) or die("erro ao cadastra registro");
    


header("Location:http://localhost/SaborDaMae/?pag=contato");