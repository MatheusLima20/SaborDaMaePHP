<?php

include_once '../../ConexaoBanco.php';
include_once './UploadImagens.php';

class FluxoDeDados extends UpdloadImagens {
    /*
     * 
     * Data de criacao 27/12/2017
     * Ultima modificacao 03/01/2018
     * 
     * Esta funcao insere dados no banco
     * 
     * */

    public function InserirDados($query, $conexaoBanco, $location) {

        if (mysqli_query($conexaoBanco, $query)) {

            echo '<script>alert("Dados Salvos Com Sucesso!");</script>';
        } else {
            echo '<script>alert("Falha ao Salvar!");</script>';
        }
        echo "<script>window.location = 'http://localhost/SaborDaMae/adm/index.php?pag=" . $location
        . "';</script>";
    }

    /*
     * 
     * Data de criacao 27/12/2017
     * Ultima modificacao 03/01/2018
     * 
     * Esta funcao altera os dados no banco, altera a imagem da pasta cardapio
     * e deleta a imagem antiga
     * 
     * */

    public function AlteraDadosComImg($query, $conexaoBanco, $imgDel, $location, $pasta) {

        $fluxoDados = new FluxoDeDados();

        unlink($pasta . $imgDel);
        $fluxoDados->UpaImagens($pasta);
        $fluxoDados->AlteraDados($query, $conexaoBanco, $location);
    }

    /*
     * 
     * Data de criacao 27/12/2017
     * Ultima modificacao 03/01/2018
     * 
     * Esta funcao altera os dados no banco
     * 
     * */

    public function AlteraDados($query, $conexaoBanco, $location) {

        if (mysqli_query($conexaoBanco, $query)) {

            echo '<script>alert("Alterações Salvas Com Sucesso!");</script>';
        } else {
            echo '<script>alert("Falha ao Alterar!");</script>';
        }
        echo "<script>window.location = 'http://localhost/SaborDaMae/adm/index.php?pag=" . $location
        . "';</script>";
    }

    /*
     * 
     * Data de criacao 27/12/2017
     * Ultima modificacao 03/01/2018
     * 
     * Esta funcao Deleta os dados no banco
     * 
     * */

    public function DeletaDados($query, $conexaoBanco, $location) {

        if (mysqli_query($conexaoBanco, $query)) {

            echo '<script>alert("Dados Deletados Com Sucesso!");</script>';

            echo "<script>window.location = 'http://localhost/SaborDaMae/adm/index.php?pag=" . $location
            . "';</script>";
        } else {
            echo '<script>alert("Falha ao Deletar!");</script>';
            echo "<script>window.location = 'http://localhost/SaborDaMae/adm/index.php?pag=" . $location
            . "';</script>";
        }
    }

    /*
     * 
     * Data de criacao 27/12/2017
     * Ultima modificacao 03/01/2018
     * 
     * Esta funcao Deleta os dados no banco e deleta a imagem da pasta cardapio
     * 
     * */

    public function DeletaDadosComImg($query, $conexaoBanco, $imgDel, $location, $pasta) {

        unlink($pasta . $imgDel);

        $fluxoDados = new FluxoDeDados();

        $fluxoDados->DeletaDados($query, $conexaoBanco, $location);
    }

}
