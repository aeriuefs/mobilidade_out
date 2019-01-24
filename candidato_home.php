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

                <h4 class="center-align uppercase">Candidato</h4>

                <div class="row">
                    <div class="col s12 m4 uppercase center-align">
                        <div class="card  grey darken-1">
                            <div class="card-image">
                                <img src="img/home-inscri.jpg">
                                <span class="card-title"><strong>Cadastro</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_atualizar_dados.php" class="white-text">Atualize seus dados</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-editais.png">
                                <span class="card-title"><strong>Inscrição</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_editais_abertos.php" class="white-text">Editais abertos</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-processos.jpeg">
                                <span class="card-title"><strong>Processos</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_inscricoes.php" class="white-text">Suas inscrições</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-documentos.jpg">
                                <span class="card-title"><strong>Documentos</strong></span>

                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_documentos.php" class="white-text">Adicionar arquivos</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-recursos.jpg">
                                <span class="card-title"><strong>Recursos</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_recursos.php" class="white-text"> Solicitar e acompanhar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-profic.jpg">
                                <span class="card-title"><strong>Proficiência</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_proficiencia.php" class="white-text">Provas de idiomas</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card grey darken-1">
                            <div class="card-image">
                                <img src="img/home-ajuda.jpg">
                                <span class="card-title"><strong>Ajuda</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="candidato_ajuda.php" class="white-text">Perguntas comuns</a>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

    </body>
</html>