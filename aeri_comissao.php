<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <header>
        <?php
        include("topo_pagina.php");
        ?>
    </header>
</head>
<body>

    <header>
        <?php
        include("navbar_aeri.php");
        ?>
    </header>

    <main>

        <?php
        include("parallax.php");
        ?>

        <section class="section container">

            <h4 class="center-align uppercase">Comissão</h4> 

            <div class="row">

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-inscri.jpg">
                            <span class="card-title"><strong>Avaliações</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_comissao_selec_edital_avaliacoes.php" class="white-text">Estudantes avaliados</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-processos.jpeg">
                            <span class="card-title"><strong>Recursos</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_comissao_selec_edital_recursos.php" class="white-text">Avaliação de recursos</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-profi.jpg">
                            <span class="card-title"><strong>Gerenciar</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_comissao_selec_edital_designacao.php" class="white-text">Designação de avaliadores</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-editais.png">
                            <span class="card-title"><strong>Notas dos cursos</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_comissao_selec_edital_notas.php" class="white-text">Notas de cada curso</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </section>

    </main>


    <?php
    include("rodape_aeri.php");
    ?>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script> $(".button-collapse").sideNav();</script>

</body>
</html>