<?php

include '../ConexaoBanco.php';

$usuarioSession = "";
$senhaSession = "";
$usuarioBanco = "";
$senhaBanco = "";

$usuarioForm = filter_input(INPUT_POST, "usuario");

$senhaForm = filter_input(INPUT_POST, "senha");

$result = mysqli_query($conexaoBanco, "select * from login");
$existeUsuario = false;
while ($linha = mysqli_fetch_array($result)) {

    $usuarioBanco = $linha['usuario'];
    $senhaBanco = $linha['senha'];
    
    if ($usuarioForm == $usuarioBanco && $senhaForm == $senhaBanco) {

        $usuarioSession = $usuarioBanco;
        $senhaSession = $senhaBanco;

        session_start();

        $_SESSION['usuario'] = $usuarioSession;
        $_SESSION['senha'] = $senhaSession;
        $existeUsuario = true;
        break;
    }else{
        $existeUsuario = FALSE;
    }
}

if(!$existeUsuario){
echo '<script>alert("Usuario ou Senha Incorreto(s)!");</script>';

echo "<script>
window.location = 
'http://localhost/SaborDaMae/adm/login.php';</script>";
}else{
    echo "<script>
window.location = 
'http://localhost/SaborDaMae/adm/index.php';</script>";
}
