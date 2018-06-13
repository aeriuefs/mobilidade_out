<?php
require_once('sessao_aeri.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
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

                <h4 class="center-align uppercase">Candidatos aprovados no edital </h4> 

                <div class="row">

                    <div class="col l12 s12 m12"> <hr> </div>

                </div>

                <?php
                $query_candidaturas = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
                $resultado = conecta_seleciona($query_candidaturas);

                while ($res = mysqli_fetch_assoc($resultado)) {

                    echo ('<form style="display: inline;" method="post" action="">');

                    if ($res['designado'] == '1') {
                        echo ('<span class="new badge grem" data-badge-caption="Designado"></span>');
                    } else {
                        echo ('<span class="new badge orange" data-badge-caption="Não designado"></span>');
                    }

                    echo ('<p> Nome: ' . $res['nome'] . ' | Matrícula: ' . $res['matricula'] . ' | Nota final: ' . $res['nota_final'] . '</p>');
                    echo ('<p> Inglês: ' . $res['nota_ingles'] . ' | Espanhol: ' . $res['nota_espalhol'] . ' | Francês: ' . $res['nota_frances'] . '</p>');

                    $query_universidades = "SELECT * FROM candidato_opcao_universidade WHERE edital = '" . $edital . "' AND matricula = '" . $res['matricula'] . "'";
                    $resultado2 = conecta_seleciona($query_universidades);
                    $i = 1;

                    while ($res_universidade = mysqli_fetch_assoc($resultado2)) {

                        echo ('<p> <input name="universidade" type="radio" id="a' . $i . '" /> <label for="a' . $i . '"> ' . $res_universidade['nome'] . ' | Localização: ' . $res_universidade['local'] . '</label></p>');
                        $i++;
                    }

                    echo ('<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>');
                    echo ('<input type="hidden" name="edital" value="' . $res['edital'] . '"/>');
                    echo ('<button class="btn waves-effect waves-light" type="submit" name="salvar"> Salvar <i class="material-icons right"> save </i> </button>');
                    echo ('</form>');
                    echo '<div class="row"> <div class="col l12 s12 m12"> <hr> </div> </div>';
                }
                ?>

            </section>

        </main>

        <?php
        include("rodape_aeri.php");
        include("scripts.php");
        ?>

    </body>

</html>