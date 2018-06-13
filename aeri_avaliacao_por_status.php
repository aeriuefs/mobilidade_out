<?php
require_once('sessao_aeri.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$status = $_POST['status'];
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

                <h4 class="center-align uppercase">Status: <?php echo ($status); ?> — Edital <?php echo ($edital); ?></h4> 

                <b>Candidatos</b>
                <br>

                <form method="post" action="">

                    <?php
                    $query = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "' AND situacao_atual = '" . $status . "'";
                    $resultado = conecta_seleciona($query);
                    $i = 0;
                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<p><input type="checkbox" name="ckb[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '">' . $res['nome'] . ' — Matrícula: ' . $res['matricula'] . '</p> </label></p>');

                        $i++;
                    }
                    ?>

                    <hr>
                    <b>Alterar status de candidura</b>
                    <p>Selecione os candidatos acima para os quais deseja alterar o status da canditura.</p>

                    <div class="input-field col l6 m6 s12">

                        <SELECT NAME = "curso" SIZE=1>
                            <option value="" disabled selected>Selecione o novo status</option>
                            <?php
                            $query = "SELECT * FROM status_inscricao";
                            $resultado_status = conecta_seleciona($query);

                            while ($lista_status = mysqli_fetch_assoc($resultado_status)) {

                                echo ('<OPTION value = "' . $lista_status['id'] . '" >' . $lista_status['titulo']);
                            }
                            ?>

                        </SELECT>
                    </div>

                    <div class="row">

                        <div class="input-field col l12 m12 s12">
                            <input type="text" id="informacao" class="materialize-textarea"></textarea>
                            <label for="informacao">Adicionar informação</label>
                        </div>

                    </div>

                    <button class="btn waves-effect waves-light " type="submit" name="alterar"> Alterar status</button> 

                </form>

            </section>

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
            $('select').material_select();
        });

    </script>
</body>
</html>