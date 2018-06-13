<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

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

            <h4 class="center-align uppercase">Pareceres</h4> 

            <div class="row">

                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-parecer.jpeg">
                            <span class="card-title"><strong>Documentação</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_pareceres_editais_doc.php" class="white-text">Enviar documentos</a>
                        </div>
                    </div>
                </div>


                <div class="col s12 m4 uppercase center-align">
                    <div class="card blue-grey">
                        <div class="card-image">
                            <img src="img/home-parecer.jpeg">
                            <span class="card-title"><strong>Respostas</strong></span>
                        </div>

                        <div class="card-action hoverable">
                            <a href="aeri_pareceres_editais_resposta.php" class="white-text">Respostas recebidas</a>
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