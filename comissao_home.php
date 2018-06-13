<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Mobilidade out - Home</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <link type="text/css" rel="stylesheet"
              href="css/materialize.min.css"
              media="screen,projection"/>

        <link type="text/css" rel="stylesheet" href="css/estilo.css">


        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <header>
            <?php
            include("navbar_aeri_1.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">
                <h4 class="center-align uppercase">Home</h4>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-inscri.jpg">
                                <span class="card-title"><strong>Candidaturas</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_barema_lista_alunos.php" class="white-text">Avaliação pelo barema</a>
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
                                <a href="aeri_barema_lista_alunos_recurso.php" class="white-text">Avaliação de recursos</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-profi.jpg">
                                <span class="card-title"><strong>Sugestões</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sugestoes.php" class="white-text">Enviar comentários</a>
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