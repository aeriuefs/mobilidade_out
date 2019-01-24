<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
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



                <p>Na primeira sessão desta página você pode visualizar os períodos de recurso que estão em aberto. Os recursos que você solicitou são exibidos em seguida. </p>
                
                <b class="red-text uppercase">&nbsp;Períodos de recurso em aberto</b>

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

                            if (data_no_intervalor($res['data_inicio'], $res['data_fim'])) {

                                echo('<tr><td>' . $res['edital'] . '</td>');
                                echo('<td>' . $res['data_fim'] . '</td>');

                                echo('<td><form style="display: inline;" action="candidato_solicitacao_recurso.php" method="post"> '
                                        . '<input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                         <button class="btn waves-effect waves-light blue-grey " type="submit" name="solicitar"> Solicitar </button> </form></td></tr>');
                            }
                        }
                        ?>

                    </tbody>
                </table>

                <br><br>
                <b class="red-text uppercase">&nbsp;Recursos solicitados</b>

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
                        $query = "SELECT * FROM candidato_recursos WHERE matricula='" . $_SESSION['matricula'] . "'";
                        $resultado = conecta_seleciona($query);

                        while ($res = mysqli_fetch_assoc($resultado)) {

                            echo('<tr><td>' . $res['edital'] . '</td>');
                            echo('<td>' . $res['data'] . '</td>');
                            echo('<td>' . $res['status'] . '</td>');
                            echo('<td><form style="display: inline;" method="post" action="candidato_recurso_detalhes.php" >
                                <input type="hidden" name="id" value="' . $res['id'] . '"/>
                                    <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
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