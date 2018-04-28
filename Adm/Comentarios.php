
<?php
include '../ConexaoBanco.php';

$contComentarios = 0;

$id = array();
$nomes = array();
$emails = array();
$comentarios = array();

$result = mysqli_query($conexaoBanco, "select * from opiniao");

while ($linha = mysqli_fetch_array($result)) {

    $id[$contComentarios] = $linha['id'];
    $nomes[$contComentarios] = $linha['nome'];
    $emails [$contComentarios] = $linha['email'];
    $comentarios[$contComentarios] = $linha['opiniao'];

    ++$contComentarios;
}
?>

<div style="width: auto; height: 400px; border: 2px solid #FFF; overflow: auto;">

    <h1 style="color: #FFF; margin: 0.8em;"> Comentários </h1>
    <div style="margin-left: 0.8em;">
        <span>Numero de comentarios: <?php echo $contComentarios; ?></span>
        <?php if ($contComentarios > 0) { ?>
            <div> 

                <?php
                for ($i = 0; $i < $contComentarios; $i++) {
                    echo " <br /> <br />" . "Nome: " . $nomes[$i] . " <br />";
                    echo "Comentario: " . $comentarios[$i] . " <br />";
                    echo "Email: " . $emails[$i] . " <br />";
                    echo " <form action='QueryDados/QueryComentarios.php?id=$id[$i]&alterar=true' "
                    . "method='post' required>" .
                    "<label><textarea required maxlength='300'
                              placeholder='Digite a alteração aqui...' name='txtArea' cols='30' rows='10'></textarea>
                              </labe>" .
                    "<input type='submit' value='alterar' /> &emsp;" .
                    "</form> <br /> <br />";
                    echo
                    "<form action='QueryDados/QueryComentarios.php?id=$id[$i]&alterar=false' method='post'> "
                    . "<input type='submit' value='deletar' />"
                    . "</form>";
                }
                ?>

            </div>
            <?php } ?>
    </div>

</div>
