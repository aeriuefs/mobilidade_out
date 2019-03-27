<?php
require_once('funcoes_banco_de_dados.php');
require_once('sessao_aeri.php');
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
            <h4 class="center-align uppercase">Cadastrar Edital</h4>

            <div class="row">

                <form class="col s12" action="bd_aeri_novo_edital_uefs.php" method="post" enctype="multipart/form-data">

                    <b>Informações do edital</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="numero_edital" type="text" class="validate" name="numero_edital">
                            <label for="numero_edital">Número do Edital</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="numero_vagas" type="text" class="validate" name="numero_vagas">
                            <label for="numero_vagas">Número de vagas</label>
                        </div>

                    </div>

                    <b > Data de início e fim das inscrições</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_inscricao" id="inicio_inscricao">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_inscricao" id="fim_inscricao">

                        </div>

                    </div>

                    <b > Homologação das inscrições</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="homologacao_inscricoes" id="homologacao_inscricoes">

                        </div>

                    </div>

                    <b > Prazo para recurso</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_recurso_inscricao" id="inicio_recurso_inscricao">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_recurso_inscricao" id="fim_recurso_inscricao">

                        </div>

                    </div>

                    <b > Divulgação Final da Homologação após período de recurso</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="homologacao_final" id="homologacao_final">

                        </div>

                    </div>

                    <b > Realização da Avaliação de Proficiência</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_proficiencia" id="inicio_proficiencia">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_proficiencia" id="fim_proficiencia">

                        </div>

                    </div>

                    <b > Divulgação do resultado dos alunos aprovados na 1ª fase</b>

                    <div class="row"><div class="input-field col l6 m6 s12">
                            <input type="date" name="aprovados_primeira_fase" id="aprovados_primeira_fase">

                        </div>

                    </div>

                    <b > Prazo para recurso</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_recurso_primeira_fase" id="inicio_recurso_primeira_fase">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_recurso_primeira_fase" id="fim_recurso_primeira_fase">

                        </div>

                    </div>

                    <b > Divulgação do Resultado Final da 1ª fase após período de recurso</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="resultado_final_primeira_fase" id="resultado_final_primeira_fase">

                        </div>

                    </div>

                    <b > Avaliação e Classificação dos candidatos pela CCInt</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_classificacao" id="inicio_classificacao">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_classificacao" id="fim_classificacao">

                        </div>

                    </div>

                    <b > Resultado da 2ª fase por ordem de classificação</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="resultado_segunda_fase" id="resultado_segunda_fase">

                        </div>


                    </div>

                    <b > Prazo para recurso</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_recurso_segunda_fase" id="inicio_recurso_segunda_fase">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_recurso_segunda_fase" id="fim_recurso_segunda_fase">

                        </div>

                    </div>

                    <b> Divulgação Final do Resultado da 2ª fase após período de recurso</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="resultado_final_segunda_fase" id="resultado_final_segunda_fase">

                        </div>

                    </div>

                    <b > Reunião de Esclarecimentos e orientações</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="reuniao_esclarecimentos" id="reuniao_esclarecimentos">

                        </div>

                    </div>

                    <b > Prazo para entrega dos Formulários de Candidaturas</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_entrega_documentos" id="inicio_entrega_documentos">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim__entrega_documentos" id="fim__entrega_documentos">

                        </div>

                    </div>

                    <b > Avaliação de documentos </b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_avaliacao_documentos" id="inicio_avaliacao_documentos">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_avaliacao_documentos" id="fim_avaliacao_documentos">

                        </div>

                    </div>

                    <b>Envio das Candidaturas por Correio</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="envio_candidaturas_correio" id="envio_candidaturas_correio">

                        </div>
                    </div>

                    <b> Tempo para apresentação e recepção das cartas de aceite das IES de acolhimento</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_recepcao_carta" id="inicio_recepcao_carta">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_recepcao_carta" id="fim_recepcao_carta">

                        </div>

                    </div>

                    <b >Divulgação dos resultados da 3ª fase </b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="divulgacao_resultado_terceira_fase" id="divulgacao_resultado_terceira_fase">

                        </div>

                    </div>

                    <b> Período para: 1) Aquisição de visto no consulado 2) Passaporte 3) Seguro Saúde 4) Aquisição de Passagens Aéreas 5) Realização de exames médicos</b>
                    <div class="row">
                        <div class="input-field col l6 m6 s12">
                            <input type="date" name="inicio_aquisicoes" id="inicio_aquisicoes">

                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input type="date"  name="fim_aquisicoes" id="fim_aquisicoes">

                        </div>

                    </div>

                    <b> Arquivo do edital</b>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Arquivo</span>
                            <input type="file" name="arquivo" accept="application/pdf">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Cadastrar
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </div>

                </form>


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

    <script>

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 100, // Creates a dropdown of 15 years to control year,
            today: 'Hoje',
            clear: 'Limpar',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });

    </script>

    <script>

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>
</body>
</html>