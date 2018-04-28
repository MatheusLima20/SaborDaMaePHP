
<?php
include_once '../ConexaoBanco.php';
include_once './VerificaLogin.php';

$contHome = 0;

$id = array();
$titulo = array();
$descricao = array();
$img = array();

$result = mysqli_query($conexaoBanco, "select * from homecarrossel");

while ($linha = mysqli_fetch_array($result)) {

    $id[$contHome] = $linha['id'];
    $titulo[$contHome] = $linha['titulo'];
    $img[$contHome] = $linha['img'];

    ++$contHome;
}

?>
<script type="text/javascript" src="../JS/FormataFormContato.js"> </script>
<div class="content">

    <div class="body-pags">
        <br />
        <div> 

            <h1> Digite o Texto Da Pag Home </h1>
            <div style="margin-top: 40px;">
                <form method="get" action="QueryDados/QueryHomeText.php" required>

                    <textarea name="txtAreaHome" required rows="20" cols="90" maxlength="3000" 
                              placeholder="Digite o texto aqui..."></textarea> 
                    
                    <div>
                    <span><span class="conta_caracteres">0&nbsp;
                        </span>Caracteres de <span class="maxCaracteres">3000</span> de Permitidos</span>
                    
                    &nbsp;<input type="submit" id="botao_formulario_envia_Home" value="Enviar" />
                    <input name="botao" type="reset" value="Limpar" class="botoesFormContato" />

                </div>

                </form>
            </div>

            <br/><br/><br/>
        </div>
        
        <div>
            <div>
                <h1> Digite o titulo e a descrição da imagem </h1> <br /> <br />

                <form action="QueryDados/QueryHomeCarrossel.php?sql=inserir" enctype="multipart/form-data"
                      method="post">

                    <label>
                        Titulo: <input type="text"  name="titulo"
                                       maxlength="30"  size="50" placeholder="Digite o titulo..." />
                        <br /><br/>
                        Imagem: <input required type="file" name="imagem" />
                        <br /><br/>
                        <br />
                        <input type="submit" value="Enviar"  />
                    </label>

                </form>
            </div>
            <br /><br />

            <div style="overflow: auto; height: 400px; border: solid 5px #FFF;">
                <div style="margin-left: 20px;">
                    <?php
                     echo "<h1 style='padding: 20px; color:#fff;'>Quantidade de Imagens $contHome"
                                . "</h1> <div>";
                    for ($i = 0; $i < $contHome; $i++) {
                       
                        echo " <br /> <br />" . "Titulo: " . $titulo[$i] . " <br />";
                        echo "Img: " . "<img src='../Imgs/Slider/$img[$i]'  width='500' height='500'/>" . 
                                " <br />";
                        echo " <form enctype='multipart/form-data' "
                        . "action='QueryDados/QueryHomeCarrossel.php?id=$id[$i]&sql=alterar&imgDel=$img[$i]"
                        . "' method='post' required>" .
                        "<label><br />
                           Titulo: <input type='text'  name='titulo'
                                   maxlength='30'  size='50' placeholder='Digite o titulo...' />
                              <br /><br/>
                    Imagem: <input type='file' name='imagem' required />
                              </label>" .
                        "<input type='submit' value='alterar' /> &emsp;" .
                        "</form> <br /> <br />";
                        echo "<form action='QueryDados/QueryHomeCarrossel.php?"
                        . "id=$id[$i]&sql=deletar&imgDel=$img[$i]' "
                                . "method='post'> "
                        . "<input type='submit' value='deletar' />"
                        . "</form> <br/>";
                    }
                    echo "</div>";
                    ?>
                
                </div>

            </div>

        </div>
        <br/><br/><br/>

    </div>
</div>

