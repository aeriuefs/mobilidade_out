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
            $query = "SELECT id, edital, matricula FROM candidaturas WHERE matricula='" . $_SESSION['matricula'] . "'";
            $resultado = conecta_seleciona($query);
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Documentos</h4> 

                <p>Os seus documentos estão separados por edital. Cliando em <b>Meus Arquivos</b> você pode tanto visualizar seus arquivos anexados quanto adicionar novos arquivos.</p>

                <br>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Edital</th>
                            <th>Data</th>
                            <th>Ações</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        while ($res = mysqli_fetch_assoc($resultado)) {
                            echo('<tr><td>' . $res['edital'] . '</td>');
                            echo('<td>2017-12-12</td>');
                            echo('<td><form style="display: inline;" method="post" action="candidato_meus_arquivos.php" > <input type="hidden" name="edital" value="' . $res['edital'] . '"/>
                        <input type="hidden" name="matricula" value="' . $_SESSION['matricula'] . '"/> <button class="btn waves-effect waves-light blue-grey " type="submit" name="acompanhar"> Meus arquivos</button> </form></td></tr>');
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