
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="text-align: center;">

            <div style="margin: 30px;">
                <h2>Digite usuario e senha para entrar no Sistema</h2>
            </div>

            <div>

                <form action="ValidaUsuario.php" method="post">

                    Usuario: <br/>
                    <input required name="usuario" type="text" 
                           maxlength="10" width="50" placeholder="Digite o usuario..." />
                    <br/> <br/>
                    Senha: <br/>
                    <input required name="senha" type="password" 
                           maxlength="10" width="50" placeholder="Digite a senha..." />
                    <br/><br/>
                    <input type="submit" value="Enviar" />
                    <input type="reset" value="Limpar" />
                </form>

            </div>

        </div>
    </body>
</html>
