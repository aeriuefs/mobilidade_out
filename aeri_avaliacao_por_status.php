<?php
require_once('sessao_aeri.php');
require_once('funcoes_uteis.php');

$edital = $_POST['edital'];
$status = $_POST['status'];

if ($status == 1) {
    $titulo = "Inscricao em Analise";
} else if ($status == 2) {
    $titulo = "Inscricao Homologada";
} else if ($status == 3) {
    $titulo = "Inscricao nao Homologada";
} else if ($status == 4) {
    $titulo = "Inscricao homologada (Recurso)";
} else if ($status == 5) {
    $titulo = "Inscricao nao homologada (Recurso)";
} else if ($status == 6) {
    $titulo = "Candidato aprovado proficiencia";
} else if ($status == 7) {
    $titulo = "Candidato reprovado proficiencia";
} else if ($status == 8) {
    $titulo = "Candidato aprovado proficiencia (Recurso)";
} else if ($status == 9) {
    $titulo = "Candidato reprovado proficiencia (Recurso)";
} else if ($status == 10) {
    $titulo = "Candidato aprovado CCint";
} else if ($status == 11) {
    $titulo = "Candidato reprovado CCint";
} else if ($status == 12) {
    $titulo = "Candidato aprovado CCint (Recurso)";
} else if ($status == 13) {
    $titulo = "Candidato reprovado CCint (Recurso)";
} else if ($status == 14) {
    $titulo = "Inscricao aprovada em Intercambio";
} else if ($status == 15) {
    $titulo = "Inscricao reprovada em Intercambio";
}
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

                <h4 class="center-align uppercase">Status: <?php echo ($titulo); ?> — Edital <?php echo ($edital); ?></h4> 

                <b>Candidatos</b>
                <br>

                <form method="post" action="bd_aeri_avaliacao_por_status.php">

                    <input type="hidden" name="edital" value="<?php echo ($edital); ?>"/>    

                    <?php
                    $query = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "' AND situacao_atual = '" . $status . "'";
                    $resultado = conecta_seleciona($query);
                    $i = 0;

                    while ($res = mysqli_fetch_assoc($resultado)) {

                        echo('<p><input type="checkbox" name="selecionados[]" id="' . $i . '" value="' . $res['matricula'] . '" /> <label for="' . $i . '">' . $res['nome'] . ' — Matrícula: ' . $res['matricula'] . '</p> </label></p>');

                        $i++;
                    }
                    ?>

                    <hr>
                    <b>Alterar status de candidura</b>
                    <p>Selecione os candidatos acima para os quais deseja alterar o status da canditura.</p>

                    <div class="input-field col l6 m6 s12">

                        <SELECT NAME = "novo_status" SIZE=1>
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
                            <input type="text" id="informacao" name="informacao" class="materialize-textarea"></textarea>
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