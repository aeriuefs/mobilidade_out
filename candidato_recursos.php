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

            <section class="section container">
                <h4 class="center-align uppercase">Recursos</h4>



                <p>Clicando em "Datalhes", é possível visualizar os dados enviados na sua inscrição. Clicando em Acompanhar Inscrição, poderá visualizar o histórico de atualizações. Se a opção de <b>recurso</b> for cabível, esta também estará disponível nesta sessão.</p>

                <br><br>
                <b>&nbsp;Periodos de recurso em aberto</b>

                <br>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Edital</th>
                            <th>Data final</th>
                            <th>Ações</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $query = "SELECT * FROM recursos";
                        $resultado = conecta_seleciona($query);

                        while ($res = mysqli_fetch_assoc($resultado)) {

                            if(data_no_intervalor($res['data_inicio'], $res['data_fim'])) {

                                echo('<tr><td>' . $res['edital'] . '</td>');
                                echo('<td>' . $res['data_fim'] . '</td>');

                                echo('<td><form style="display: inline;" method="post" action="candidato_solicitacao_recurso.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="acompanhar"> Solicitar </button> </form></td></tr>');
                            }
                        }
                        ?>



                    </tbody>
                </table>

                <br><br>
                <b>&nbsp;Recursos solicitados</b>

                <br>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Edital</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Ações</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $query = "SELECT * FROM candidato_recursos";
                        $resultado = conecta_seleciona($query);

                        while ($res = mysqli_fetch_assoc($resultado)) {

                            echo('<tr><td>' . $res['edital'] . '</td>');
                            echo('<td>' . $res['data'] . '</td>');
                            echo('<td>' . $res['status'] . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="candidato_recurso_detalhes.php" >
                                <input type="hidden" name="id" value="' . $res['id'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="acompanhar"> Visualizar </button> </form></td></tr>');
                        }
                        ?>



                    </tbody>
                </table>

            </section>

        </main>
        <!--END MAIN-->

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