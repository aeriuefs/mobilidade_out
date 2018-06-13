<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');
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

        <!--Main-->
        <main>

            <?php
            include("parallax.php");
            ?>

            <?php
            $query = "SELECT * FROM provas_proficiencia WHERE matricula='" . $_SESSION['matricula'] . "'";
            $resultado = conecta_seleciona($query);
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Provas de proficiência</h4>                

                <p>Abaixo são listadas suas provas marcadas. Caso não esteja marcada alguma prova, aguarde a marcação por parte da AERI. Na coluna "Conceito", é exibido seu conceito atual. S/C indica que ainda não realizou a prova.</p>

                <br>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Edital</th>
                            <th>Idioma</th>
                            <th>Data</th>
                            <th>Local e horário</th>
                            <th>Conceito</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($res = mysqli_fetch_assoc($resultado)) {
                            echo('<tr><td>' . $res['edital'] . '</td>');
                            echo('<td>' . $res['prova'] . '</td>');
                            echo('<td>' . date('d/m/Y', strtotime($res['data'])) . '</td>');
                            echo('<td>' . $res['local'] . '</td>');
                            echo('<td>' . $res['conceito'] . '</td></tr>');
                        }
                        ?>
                    </tbody>
                </table>

            </section>

        </main>

        <div class="espacamento"></div>

        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>
    </body>

</html>