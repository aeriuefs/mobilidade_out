<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        include("topo_pagina.php");
        ?>
    </head>
    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Atualização de dados </h4>                

                <div class="row">
                    <form class="col s12" action="bd_candidato_atualizar_dados_seguranca.php" method="POST">

                        <b class="orange-text">Alterar senha</b>
                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="senha_atual" type="password" class="validate" name="senha_atual" required>
                                <label for="senha_atual">Senha atual</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="senha" type="password" class="validate" name="senha" id="senha" required>
                                <label for="senha">Senha nova</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="confirmar_senha" type="password" class="validate" name="confirmar_senha" id="confirmar_senha" oninput="validaSenha(this)" required>
                                <label for="confirmar_senha">Confirmar nova senha</label>
                            </div>

                        </div>


                        <div class="row">

                            <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="enviar" >Atualizar Dados 
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </form>

                </div>

            </section>

        </main>
        <!--END MAIN-->


        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>
        <script>

    function validaSenha(input) {
        if (input.value != document.getElementById('senha').value) {
            input.setCustomValidity('Repita a senha corretamente');
        } else {
            input.setCustomValidity('');
        }
    }

</script>


    </body>
</html>
