
<?php
include './ConexaoBanco.php';

$contComentarios = 0;

$nomes = array();
$comentarios = array();

$result = mysqli_query($conexaoBanco, "select * from opiniao");

while ($linha = mysqli_fetch_array($result)) {

    $nomes[$contComentarios] = $linha['nome'];
    $comentarios[$contComentarios] = $linha['opiniao'];

    ++$contComentarios;
}
?>

<div style="width: auto; height: 400px; border: 2px solid #FFF; overflow: auto;
     background-image: url('Imgs/plano_de_fundo.fw.png');
     background-image: repeating-linear-gradient;
     ">

    <h1 style="color: #FFF; margin: 0.8em;"> Comentários </h1>
    <div style="margin-left: 0.8em;">
        <span>Numero de comentarios: <?php echo $contComentarios; ?></span>
        <?php if ($contComentarios > 0) { ?>
            <div> 

                <?php
                for ($i = 0; $i < $contComentarios; $i++) {
                    echo " <br /> <br />" . "Nome: " . $nomes[$i] . " <br />";
                    echo "Comentario: " . $comentarios[$i] . " <br /> <br />";
                }
                ?>


            </div>
<?php } ?>
    </div>

</div>
