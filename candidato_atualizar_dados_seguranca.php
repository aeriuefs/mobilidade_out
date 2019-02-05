<?php
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
                                <input  id="banco" type="password" class="validate" name="senha_atual">
                                <label for="banco">Senha atual</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="agencia" type="password" class="validate" name="senha_nova" id="senha_nova">
                                <label for="agencia">Senha nova</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="conta" type="password" class="validate" name="confirmar_senha" id="confirmar_senha">
                                <label for="conta">Confirmar nova senha</label>
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


    </body>
</html>
