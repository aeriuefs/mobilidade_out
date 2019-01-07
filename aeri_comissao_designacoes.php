<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$edital = $_POST['edital'];
require_once('funcoes_uteis.php');
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

            <h4 class="center-align uppercase">Designação de Avaliador</h4>
            
            <p>Nesta sessão você tem controle sobre o avaliador de cada estudante neste edital. Os estudantes apresentam um status de <b>"Designado"</b> e <b>"Não designado"</b> caso já tenha sido atribuído a ele um avaliador ou não, respectivamente. Quando um avaliador começa a avaliar um
            estudante este mudará de status para <b>"Em avaliação"</b>. Ao término da avaliação o status do estudante é alterado para <b>"Avaliado"</b>.  </p>


            <?php
            $query_candidaturas = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
            $resultado = conecta_seleciona($query_candidaturas);

            while ($res = mysqli_fetch_assoc($resultado)) {

                echo ('<form style="display: inline;" method="post" action="bd_aeri_comissao_designacoes.php" enctype="multipart/form-data">');

                if ($res['designado'] == '1') {
                    echo ('<span class="new badge grem" data-badge-caption="Designado"></span>');
                } else {
                    echo ('<span class="new badge orange" data-badge-caption="Não designado"></span>');
                }

                echo ('<p><b class="orange-text"> Nome: ' . $res['nome'] . ' | Matrícula: ' . $res['matricula'] . '</b></p>');

                $query_comissao = "SELECT * FROM servidores WHERE tipo = '3'";
                $resultado2 = conecta_seleciona($query_comissao);
                
                echo('                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="escore" type="number" name="escore" value="' . $res['escore'] . '" class="validate" required>
                            <label for="escore">Escore</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="posicao" type="number" name="posicao" value="' . $res['posicao'] . '" class="validate" required>
                            <label for="posicao">Posição no curso</label>
                        </div>

                    </div>');

                echo ('<SELECT NAME = "avaliadores" SIZE=1 required="">');
                echo ('<option value="" disabled selected>Selecione o avaliador</option>');
                while ($comissao = mysqli_fetch_assoc($resultado2)) {

                    echo ('<OPTION value = "' . $comissao['nome'] . '"' . (($comissao['nome'] == $res['avaliador']) ? "selected" : "") . '>' . $comissao['nome']);
                }

                echo ('</SELECT>');

                echo ('<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>');
                echo ('<input type="hidden" name="edital" value="' . $res['edital'] . '"/>');
                echo ('<button class="btn waves-effect waves-light grey darken-3" type="submit" name="salvar"> Atualizar <i class="material-icons right"> save </i> </button>');
                echo ('</form><br><br><hr>');
                
            }
            ?>

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