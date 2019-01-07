<?php
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

    <section class="section container">

        <h4 class="center-align uppercase">Avaliação</h4>

        <strong class="uppercase">Processo de inscrição</strong>

        <div class="row">

            <div class="col l12 s12 m12">
                <hr>
            </div>

        </div>

        <div class="row">

            <div class="col s12 m4 uppercase center-align">
                <div class="card blue-grey">
                    <div class="card-image">
                        <img src="img/home-processos.jpeg">
                        <span class="card-title"><strong>Candidaturas</strong></span>
                    </div>

                    <div class="card-action hoverable">
                        <a href="aeri_avaliacao_candidaturas.php" class="white-text">Gerenciar Processos</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 uppercase center-align">
                <div class="card blue-grey">
                    <div class="card-image">
                        <img src="img/home-processos.jpeg">
                        <span class="card-title"><strong>Encaminhamento</strong></span>
                    </div>

                    <div class="card-action hoverable">
                        <a href="aeri_avaliacao_candidatos_aprovados_edital.php" class="white-text">Definir IES
                            Destino</a>
                    </div>
                </div>
            </div>

        </div>

        <strong class="uppercase">Proficiência</strong>

        <div class="row">

            <div class="col l12 s12 m12">
                <hr>
            </div>

        </div>

        <div class="row">

            <div class="col s12 m4 uppercase center-align">
                <div class="card blue-grey">
                    <div class="card-image">
                        <img src="img/home-profi.jpg">
                        <span class="card-title"><strong>Provas</strong></span>
                    </div>

                    <div class="card-action hoverable">
                        <a href="aeri_proficiencia_editais.php" class="white-text">Marcar provas</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 uppercase center-align">
                <div class="card blue-grey">
                    <div class="card-image">
                        <img src="img/home-profi.jpg">
                        <span class="card-title"><strong>Dispensa</strong></span>
                    </div>

                    <div class="card-action hoverable">
                        <a href="aeri_proficiencia_dispensa_edital.php" class="white-text">Dispensar alunos</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 uppercase center-align">
                <div class="card blue-grey">
                    <div class="card-image">
                        <img src="img/home-profi.jpg">
                        <span class="card-title"><strong>Notas</strong></span>
                    </div>

                    <div class="card-action hoverable">
                        <a href="aeri_proficiencia_notas.php" class="white-text">Atualizar notas</a>
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