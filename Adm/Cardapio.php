
<?php
include_once './VerificaLogin.php';

include_once '../ConexaoBanco.php';

$contCardapio = 0;

$id = array();
$titulo = array();
$descricao = array();
$img = array();

$result = mysqli_query($conexaoBanco, "select * from cardapio");

while ($linha = mysqli_fetch_array($result)) {

    $id[$contCardapio] = $linha['id'];
    $titulo[$contCardapio] = $linha['titulo'];
    $descricao [$contCardapio] = $linha['descricao'];
    $img[$contCardapio] = $linha['img'];

    ++$contCardapio;
}
?>



<div class="content">

    <div class="body-pags">
        <br />



        <div>
            <div>
                <h1> Digite o titulo e a descrição do prato </h1> <br /> <br />

                <form action="QueryDados/QueryCardapio.php?sql=inserir" enctype="multipart/form-data"
                      method="post">

                    <label>
                        Titulo: <input type="text" required  name="titulo"
                                       maxlength="30"  size="50" placeholder="Digite o titulo..." />
                        <br /><br/>
                        Imagem: <input required type="file" name="imagem" />
                        <br /><br/>
                        Descrição: <br/><textarea 
                            required maxlength="300" rows="15" cols="50" name="txtDescricao"
                            placeholder="Digite a descrição aqui..."
                            ></textarea>
                        <br />
                        <input type="submit" value="Enviar"  />
                    </label>

                </form>
            </div>
            <br /><br />

            <div style="overflow: auto; height: 400px; border: solid 5px #FFF;">
                <div style="margin-left: 20px;">
                    <?php
                    for ($i = 0; $i < $contCardapio; $i++) {
                        echo " <br /> <br />" . "Titulo: " . $titulo[$i] . " <br />";
                        
                        echo "Descrição: " . $descricao[$i] . " <br />";
                        
                        echo "Img: " . "<img src='../Imgs/Cardapio/$img[$i]'  "
                                . "width='500' height='500'/>" . " <br />";
                        
                        echo " <form enctype='multipart/form-data' "
                        . "action='QueryDados/QueryCardapio.php?id=$id[$i]&sql=alterar&imgDel=$img[$i]"
                        . "' method='post' required>" .
                        "<label><br />
                           Titulo: <input type='text' required  name='titulo'
                                   maxlength='30'  size='50' placeholder='Digite o titulo...' />  
                                   <br /> <br />                 
                                   <textarea required maxlength='300'
                              placeholder='Digite a Descrição...' name='txtDescricao' 
                              cols='30' rows='10'></textarea>
                              <br /><br/>
                    Imagem: <input type='file' name='imagem' required />
                              </label>" .
                        "<input type='submit' value='alterar' /> &emsp;" .
                        "</form> <br /> ";
                        echo
                         "<form action='QueryDados/QueryCardapio.php?id=$id[$i]&sql=deletar&imgDel=$img[$i]'"
                                . " method='post'> "
                        . "<input type='submit' value='deletar' />"
                        . "</form> <br/>";
                    }
                    ?>
                </div>

            </div>

        </div>
        <br/><br/><br/>
    </div>    

</div>