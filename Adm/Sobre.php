
<?php
include_once './VerificaLogin.php';

include_once '../ConexaoBanco.php';


?>


<script type="text/javascript" src="../JS/FormataFormContato.js"> </script>
<div class="content">

    <div class="body-pags">
        <br />
        <div> 

            <h1> Digite o Texto Da Pag Sobre </h1>
            <div style="margin-top: 40px;">
                <form method="get" action="QueryDados/QuerySobre.php" required>

                    <textarea name="txtSobre" required rows="20" cols="90" maxlength="3000" 
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


</div>
</div>