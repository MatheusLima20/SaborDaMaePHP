<?php

include_once '../ConexaoBanco.php';
$result = mysqli_query($conexaoBanco, "select * from login");

session_start();

$usuarioSession = $_SESSION['usuario'];
$senhaSession = $_SESSION['senha'];

$validaUsuario = false;

while ($linha = mysqli_fetch_array($result)) {

    $usuarioBanco = $linha['usuario'];
    $senhaBanco = $linha['senha'];

    if ($usuarioSession == $usuarioBanco && $senhaSession == $senhaBanco) {
        $validaUsuario = true;
        break;
    } else {
        $validaUsuario = false;
    }
}

if (!$validaUsuario) {
    echo '<script>alert("Usuario ou Senha Incorreto(s)!");</script>';

    echo "<script> window.location = 'http://localhost/SaborDaMae/adm/login.php';</script>";
}
