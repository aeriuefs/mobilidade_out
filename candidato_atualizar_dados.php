<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    ?>

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

                <h4 class="center-align uppercase">Atualizar dados</h4>

                <div class="row">
                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/dados_pessoais.jpg">
                                <span class="card-title"><strong>Cadastro</strong></span>
                            </div>

                            <div class="card-action hoverable">

                                <a href="candidato_atualizar_dados_pessoais.php" class="white-text">Dados Pessoais</a>

                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        
                        <div class="card blue-grey">
                            
                            <div class="card-image">
                                <img src="img/finalizacao.jpg">
                                <span class="card-title"><strong>Dados de bolsa</strong></span>
                            </div>

                            <div class="card-action hoverable">

                                <a href="candidato_finalizar_cadastro.php" class="white-text">Conta e passaporte</a>

                            </div>

                        </div>

                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/dados_senha.jpeg">
                                <span class="card-title"><strong>Segurança</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_atualizar_dados_seguranca.php" class="white-text">Alterar Senha</a>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>
    </body>
</html>