<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
?>

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
            include("navbar_aeri.php");
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
                                <span class="card-title"><strong>Editais</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_editais.php" class="white-text">Adicionar e Editar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-processos.jpeg">
                                <span class="card-title"><strong>Candidaturas</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_avaliacao_menu.php" class="white-text">Avaliação de processos</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-disciplinas.jpg">
                                <span class="card-title"><strong>Estudantes</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_estudantes.php" class="white-text">Informações sobre alunos</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-comissao.png">
                                <span class="card-title"><strong>Avaliações</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_comissao.php" class="white-text">Recursos, notas e mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-parecer.jpeg">
                                <span class="card-title"><strong>Pareceres</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_pareceres.php" class="white-text">Resposta de colegiados</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-sugestoes.jpg">
                                <span class="card-title"><strong>Sugestões</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sugestoes_recebidas.php" class="white-text">Sugestões Recebidas</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-recursos.jpg">
                                <span class="card-title"><strong>Relatórios</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sistema_arquivos.php" class="white-text">Gerar relatórios</a>
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