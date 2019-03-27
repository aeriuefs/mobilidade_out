<!DOCTYPE html>
<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');
?>
<html lang="pt-br">
    
    <head>

        <?php
        include("topo_pagina.php");
        ?>

    </head>
    
    <body>

        <header>
            <?php
            include("navbar_login.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax_home.php");
            ?>

            <section class="section container">
                
                <h4 class="center-align uppercase">Alterar senha de acesso</h4>

                <p> Nesta sessão você deve cadastrar sua nova senha. Preencha o formulário em seguida salve o mesmo.</p>

                <form class="col s12" action="" method="POST">
                    
                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input id="senha" type="password" name="senha" class="validate" required>
                            <label for="senha">Senha</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="confirmacao_senha" type="password" name="confirmacao_senha" class="validate" oninput="validaSenha(this)" required>
                            <label for="confirmacao_senha">Confirmar senha</label>
                        </div>

                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="action">Salvar
                            <i class="material-icons right">chevron_right</i>
                        </button>
                    </div>
                    
                </form>
                
            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>