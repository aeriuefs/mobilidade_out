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

        <?php
        include("parallax.php");
        ?>

        <section class="section container">

            <h4 class="center-align uppercase">Designação de Avaliador</h4> 


            <?php
            $query_candidaturas = "SELECT * FROM candidaturas WHERE edital = '" . $edital . "'";
            $resultado = conecta_seleciona($query_candidaturas);

            while ($res = mysqli_fetch_assoc($resultado)) {

                echo ('<form style="display: inline;" method="post" action="" enctype="multipart/form-data">');

                if ($res['designado'] == '1') {
                    echo ('<span class="new badge grem" data-badge-caption="Designado"></span>');
                } else {
                    echo ('<span class="new badge orange" data-badge-caption="Não designado"></span>');
                }

                echo ('<p> Nome: ' . $res['nome'] . ' | Matrícula: ' . $res['matricula'] . ' | Curso: ' . $res['nota_final'] . '</p>');

                $query_comissao = "SELECT * FROM servidores WHERE tipo = '3'";
                $resultado2 = conecta_seleciona($query_comissao);

                echo ('<SELECT NAME = "avaliadores" SIZE=1 required="">');
                echo ('<option value="" disabled selected>Selecione o avaliador</option>');
                while ($comissao = mysqli_fetch_assoc($resultado2)) {

                    echo ('<OPTION value = "' . $comissao['nome'] . '">' . $comissao['nome']);
                }

                echo ('</SELECT>');

                echo ('<input type="hidden" name="matricula" value="' . $res['matricula'] . '"/>');
                echo ('<input type="hidden" name="edital" value="' . $res['edital'] . '"/>');
                echo ('<button class="btn waves-effect waves-light" type="submit" name="salvar"> Salvar <i class="material-icons right"> save </i> </button>');
                echo ('</form>');
                
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