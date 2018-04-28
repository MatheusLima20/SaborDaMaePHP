<?php

include './FluxoDeDados.php';

$fluxoDados = new FluxoDeDados();
$txtEnviaHome = filter_input(INPUT_GET, 'txtAreaHome');

$query = mysqli_query($conexaoBanco, "select * from txthome");
$temDados = mysqli_fetch_array($query);
if ($temDados == NULL) {

    $query = "INSERT INTO `txthome` (`id`, `textoHome`) VALUES (NULL, '$txtEnviaHome')";
    

    $fluxoDados->InserirDados($query, $conexaoBanco, "home");
    
} else {
    
    $query = "UPDATE `txthome` SET "
            . "`textoHome`='$txtEnviaHome' WHERE `id`='1'";
     
   $fluxoDados->AlteraDados($query, $conexaoBanco, "home");
    
}
