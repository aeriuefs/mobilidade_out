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

                    <form class="col s12" action="bd_candidato_finalizar_cadastro.php" enctype="multipart/form-data" method="POST">

                        <?php
                        $query = "SELECT * FROM candidatos WHERE matricula='" . $_SESSION['matricula'] . "'";
                        $resultado = conecta_seleciona($query);
                        $res = mysqli_fetch_assoc($resultado);
                        ?>

                        <b class="orange-text">Dados Bancários</b>

                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="banco" type="text" class="validate" name="banco" value="<?php echo($res['banco']); ?>">
                                <label for="banco">Banco</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="agencia" type="text" class="validate" name="agencia" value="<?php echo($res['agencia']); ?>">
                                <label for="agencia">Agência</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col l6 m6 s12">
                                <input  id="conta" type="text" class="validate" name="conta" value="<?php echo($res['conta']); ?>">
                                <label for="conta">Conta</label>
                            </div>
                        </div>

                        <b class="orange-text">Dados de viagem</b>
                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="telefone" type="text" class="validate" name="passaporte" value="<?php echo($res['passaporte']); ?>" >
                                <label for="telefone">Passaporte</label>
                            </div>

                        </div>

                        <div class="row">

                            <p>Após atualizar as informações, você será redirecionado para a página de documentos.
                            Nesta página você deve acessar o edital escolhido e fazer o upload do comprovante da conta
                            bancária e do passaporte. Os arquivos devem estar no <b>formato PDF</b>.</p>
                            
                        </div>


                        <div class="row">

                            <button class="btn waves-effect waves-light indigo lighten-2" type="submit" name="enviar">Atualizar Dados
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
