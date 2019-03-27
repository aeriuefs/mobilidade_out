<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$id = isset($_POST['id']) ? $_POST['id'] : recurpera_candidato();
$edital = isset($_POST['edital']) ? $_POST['edital'] : recurpera_candidato();
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
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Detalhes do Recurso</h4>

                <b class="red-text"> Dados pessoais</b>

                <?php
                $query = "SELECT * FROM candidato_recursos WHERE id='" . $id . "'";
                $resultado = conecta_seleciona($query);
                $res = mysqli_fetch_assoc($resultado);
                ?>

                <p>Edital: <span style="color: #737373"> <?php echo($res['edital']); ?></span></p>

                <p>Data: <span style="color: #737373"> <?php formatar_data($res['data']); ?> </span></p>

                <p>Explanação: <span style="color: #737373"> <?php echo($res['explanacao']); ?> </span></p>

                <b class="red-text">Download do arquivo</b>

                <br><br>

                <a href="<?php echo('arquivos/editais/' . str_replace('/', '-', $edital) . '/candidatos/' . $_SESSION['matricula'] . '/recurso/recurso_' . $id . '.pdf'); ?> " download>
                    <img src="img/icones/pdf.png" alt="Download" width="50" height="50">
                </a>

                <br><br>

                <b class="red-text">Resultado</b>

                <p>Status: <span style="color: #737373"> <?php echo($res['status']); ?> </span></p>

                <p>Justificativa da comissão: <span style="color: #737373"> <?php echo($res['justificativa']); ?> </span></p>

            </section>

        </main>


        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        include ("scripts.php");
        ?>

    </body>
</html>