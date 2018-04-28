

<script type="text/javascript" src="JS/Validator/multifield.js" ></script>
<script type="text/javascript" src="JS/Validator/validator.js" ></script>
<script type="text/javascript" src="JS/ValidationFormContato.js" ></script>
<script type="text/javascript" src="JS/FormataFormContato.js" ></script>

<link type="text/css" rel="stylesheet" href="CSS/Contato/fv.css" />

<div class="content">

    <div class="body-pags" style="padding-bottom: 50px;">

        <br /> <br />
        <form action="SalvaOpiniao.php" method="post" novalidate>
            <span id="texto_opiniao"><h3>Prencha todos os dados com sua opinião!</h3></span> <br />

            <div class="item">
                <label>
                    <span>Nome: </span>
                    <input data-validate-length-range="4" name="name" 
                           placeholder="Digite seu nome e sobre nome..."  size="50"
                           maxlength="10" id="nome" class="opiniao" required />
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Digite pelo menos 4 caracteres!</p>
                        </div>
                    </div>
            </div>
            </label> 
            <br />
            <div class="item">
                <label>
                    <span>Email: </span>
                    <input name="email" class="opiniao" required
                           type="email" size="50" maxlength="30" 
                           placeholder="Digite seu email..." id="email" />
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <p>Digite o email corretamente!</p>
                            <b></b>
                        </div></div>
                </label>
            </div><br />
            <div class="item">
                <label>
                    Digite sua Opinião: <br /> 
                    <textarea required name="opiniao"
                              placeholder="Digite sua opinião aqui..." cols="50" rows="10"
                              ></textarea>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <p>Preencha o campo com seu comentario!</p>
                            <b></b>
                            </label>
                        </div>
                    </div>
            </div>

            <div id="contaCaracteresEBotoesSub">

                <div>
                    <span><span class="conta_caracteres">0&nbsp;
                        </span>Caracteres de <span class="maxCaracteres">300</span> de Permitidos</span>

                    &nbsp;<input type="submit" id="botao_formulario_envia" value="Enviar" />
                    <input name="botao" type="reset" value="Limpar" class="botoesFormContato" />

                </div>

            </div>
        </form>
        <br /> <br /><br /> <br />

        <?php include './Comentarios.php'; ?>
        
    </div>
</div>
