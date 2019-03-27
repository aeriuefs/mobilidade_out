<?php
require_once('sessao_aeri.php');
require_once('funcoes_banco_de_dados.php');
require_once ('funcoes_de_arquivos.php');

$edital = $_POST['edital'];

$query = "SELECT * FROM editais WHERE numero_edital='" . $edital . "'";
$resultado = conecta_seleciona($query);
$res = mysqli_fetch_assoc($resultado);
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

        <section class="section container">

            <h4 class="center-align uppercase">Edital <?php echo($res['numero_edital']); ?></h4> 

            <p>Nesta página, na sessão Ações você tem acesso as ações que pode realizar neste edital. O download e o upload são referentes aos arquivos do edital. Em seguida, você tem acesso aos
                detalhes deste edital, como informações e datas importantes. Os estudantes inscritos são listados na sessão Candidatos Inscritos.</p>

            <b class="orange-text">Ações:</b>

            <br><br>

            <form style="display: inline;" method="post" action="aeri_editar_edital.php" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="edital_edital"> Editar 
                    <i class="material-icons right">create</i>
                </button>                 
            </form>

            <form style="display: inline;" method="post" action="aeri_arquivos_edital.php" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>                 
                <button class="btn waves-effect waves-light blue-grey " type="submit" formtarget="_blank" name="arquivos_edital"> Download 
                    <i class="material-icons right">cloud_download</i>
                </button> 
            </form>

            <form style="display: inline;" method="post" action="aeri_add_arquivo_edital.php" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>                 
                <button class="btn waves-effect waves-light blue-grey " type="submit" name="add_arquivos"> Upload 
                    <i class="material-icons right">cloud_upload</i>
                </button> 
            </form>

            <form style="display: inline;" method="post" action="" > 
                <input type="hidden" name="edital" value="<?php echo($res['numero_edital']); ?>"/>                 
                <button class="btn waves-effect waves-light red darken-4 " type="submit" name="excluir_edital"> Excluir 
                    <i class="material-icons right">delete</i>
                </button> 
            </form>

            <br><br>

            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">assignment</i>Informações do Edital</div>
                    <div class="collapsible-body">

                        <p>Número do edital: <span style="color: #737373"> <?php echo($res['numero_edital']); ?></span></p>

                        <p>Tipo de intercâmbio: <span style="color: #737373"> <?php echo($res['tipo_intercambio']); ?> </span></p>

                        <p>Número de vagas: <span style="color: #737373"> <?php echo($res['numero_vagas']); ?> </span></p>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">event_note</i>Cronograma</div>
                    <div class="collapsible-body">

                        <p>Prazo de inscrição: <span style="color: orange"> <?php echo formatar_data($res['inicio_inscricao']) . " a " . formatar_data($res['fim_inscricao']); ?> </span></p>

                        <hr>

                        <p>Homologação das inscrições: <span style="color: orange"> <?php echo($res['homologacao_inscricoes']); ?> </span></p>

                        <hr>

                        <p>Prazo para recurso da inscrição: <span style="color: orange"> <?php echo("de " . $res['inicio_recurso_inscricao'] . " a " . $res['fim_recurso_inscricao']); ?> </span></p>

                        <hr>

                        <p>Divulgação Final da Homologação após período de recurso: <span style="color: orange"> <?php echo($res['homologacao_final']); ?> </span></p>

                        <hr>

                        <p>Realização da Avaliação de Proficiência: <span style="color: orange"> <?php echo("de " . $res['inicio_proficiencia'] . " a " . $res['fim_proficiencia']); ?> </span></p>

                        <hr>

                        <p>Divulgação do resultado dos alunos aprovados na 1ª fase: <span style="color: orange"> <?php echo($res['aprovados_primeira_fase']); ?> </span></p>

                        <hr>

                        <p>Prazo para recurso: <span style="color: orange"> <?php echo("de " . $res['inicio_recurso_primeira_fase'] . " a " . $res['fim_recurso_primeira_fase']); ?> </span></p>

                        <hr>

                        <p>Divulgação do Resultado Final da 1ª fase após período de recurso: <span style="color: orange"> <?php echo($res['resultado_final_primeira_fase']); ?> </span></p>

                        <hr>

                        <p>Avaliação e Classificação dos candidatos pela CCInt: <span style="color: orange"> <?php echo("de " . $res['inicio_classificacao'] . " a " . $res['fim_classificacao']); ?> </span></p>

                        <hr>

                        <p>Resultado da 2ª fase por ordem de classificação: <span style="color: orange"> <?php echo($res['resultado_segunda_fase']); ?> </span></p>

                        <hr>

                        <p>Prazo para recurso: <span style="color: orange"> <?php echo("de " . $res['inicio_recurso_segunda_fase'] . " a " . $res['fim_recurso_segunda_fase']); ?> </span></p>

                        <hr>

                        <p>Divulgação Final do Resultado da 2ª fase após período de recurso: <span style="color: orange"> <?php echo($res['resultado_final_segunda_fase']); ?> </span></p>

                        <hr>

                        <p>Reunião de Esclarecimentos e orientações: <span style="color: orange"> <?php echo($res['reuniao_esclarecimentos']); ?> </span></p>

                        <hr>

                        <p>Prazo para entrega dos Formulários de Candidaturas: <span style="color: orange"> <?php echo("de " . $res['inicio_entrega_documentos'] . " a " . $res['fim__entrega_documentos']); ?> </span></p>

                        <hr>

                        <p>Avaliação de documentos: <span style="color: orange"> <?php echo("de " . $res['inicio_avaliacao_documentos'] . " a " . $res['fim_avaliacao_documentos']); ?> </span></p>

                        <hr>

                        <p>Envio das Candidaturas por Correio: <span style="color: orange"> <?php echo($res['envio_candidaturas_correio']); ?> </span></p>

                        <hr>

                        <p>Tempo para apresentação e recepção das cartas de aceite das IES de acolhimento: <span style="color: orange"> <?php echo("de " . $res['inicio_recepcao_carta'] . " a " . $res['fim_recepcao_carta']); ?> </span></p>

                        <hr>

                        <p>Divulgação dos resultados da 3ª fase: <span style="color: orange"> <?php echo($res['divulgacao_resultado_terceira_fase']); ?> </span></p>

                        <hr>

                        <p>Período para: 1) Aquisição de visto no consulado 2) Passaporte 3) Seguro Saúde 4) Aquisição de Passagens Aéreas 5) Realização de exames médicos: <span style="color: orange"> <?php echo("de " . $res['inicio_aquisicoes'] . " a " . $res['fim_aquisicoes']); ?> </span></p>

                    </div>
                </li>
            </ul>

            <b class="orange-text">Candidatos inscritos:</b>

            <br>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Matrícula</th>
                        <th>Nome</th>                       
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    $query = "SELECT * FROM candidaturas WHERE edital='" . $edital . "'";
                    $resultado = conecta_seleciona($query);

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<tr><td>' . $i . '</td>');
                        echo('<td>' . $res['matricula'] . '</td>');
                        echo('<td>' . $res['nome'] . '</td>');

                        echo('<td><form style="display: inline;" method="post" action="aeri_detalhes_candidatura.php" > <input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>
                            <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="detalhes"> Detalhes </button> </form></td></tr>');

                        $i++;
                    }
                    ?>

                </tbody>

            </table>

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
        $(document).ready(function () {

            $('.modal').modal();
        });
    </script>

    <script>

        $(document).ready(function () {
            $('.collapsible').collapsible();
        });

    </script>

</body>
</html>