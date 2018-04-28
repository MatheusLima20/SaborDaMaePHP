<?php

class UpdloadImagens{

/*
 * 
 * Data de criacao 27/12/2017
 * Ultima modificacao 27/12/2017
 * 
 * esta funcao faz o upload de fotos
 * 
 * */

public function UpaImagens($pasta) {

    //$pasta = "../Imgs/";
    $uploaddir = $pasta;
  
     $uploadfile = $uploaddir . $_FILES['imagem']['name'];
  
     if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {

        echo '<script>alert("Arquivo Enviado Com Sucesso!");</script>';
    } else {
        echo '<script>alert("Falha ao Enviar Arquivo!");</script>';
    }
}

}