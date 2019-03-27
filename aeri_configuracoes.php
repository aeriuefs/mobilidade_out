<?php
require_once('funcoes_banco_de_dados.php');
require_once('sessao_aeri.php');
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
            include("navbar_aeri.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Ajustes do sistema</h4> 

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-email.jpg">
                                <span class="card-title"><strong>E-mail</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sistema_email.php" class="white-text">E-mail do sistema</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-eventos.jpg">
                                <span class="card-title"><strong>Candidatura</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sistema_eventos.php" class="white-text">Tipos de eventos</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-processos.jpeg">
                                <span class="card-title"><strong>Documentos</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_sistema_arquivos.php" class="white-text">Tipos de documentos</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m4 uppercase center-align">
                        <div class="card blue-grey">
                            <div class="card-image">
                                <img src="img/home-pessoal.jpg">
                                <span class="card-title"><strong>Pessoal</strong></span>
                            </div>

                            <div class="card-action hoverable">
                                <a href="aeri_pessoal.php" class="white-text">Gerenciar acesso</a>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>