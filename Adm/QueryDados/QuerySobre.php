<?php

include './FluxoDeDados.php';

$txtSobre = filter_input(INPUT_GET, 'txtSobre');
$fluxoDados = new FluxoDeDados();

$query = mysqli_query($conexaoBanco, "select * from txtsobre");
$temDados = mysqli_fetch_array($query);
if ($temDados == NULL) {

    $query = "INSERT INTO `txtsobre` (`id`, `textoSobre`) VALUES (NULL, '$txtSobre')";
    

    $fluxoDados->InserirDados($query, $conexaoBanco, "sobre");
    
} else {
    
    $query = "update txtsobre set textoSobre = '$txtSobre' where id = '1'";
    
    $fluxoDados->AlteraDados($query, $conexaoBanco, "sobre");
    
}
